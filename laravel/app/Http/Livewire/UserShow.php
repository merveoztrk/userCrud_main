<?php

namespace App\Http\Livewire;

use App\Models\Useruser;
use Livewire\Component;


class UserShow extends Component
{
    public $name, $surname, $email, $password, $password_confirmation, $user_id;
    protected function rules()
    {
        return [
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => ['required','email'],
            'password' => 'required|nullable|min:6|confirmed',
        ];
    }

    public function saveUser()
    {
        $validatedData = $this->validate();

        Useruser::create($validatedData);

        session()->flash('message','User Added Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editUser(int $user_id)
    {
        $user = Useruser::find($user_id);
        if($user){

            $this->user_id = $user->id;
            $this->name = $user->name;
            $this->surname = $user->surname;
            $this->email = $user->email;
            $this->password = $user->password;
        }else{
            return redirect()->to('/useruser');
        }
    }

    public function updateUser()
    {
        $validatedData = $this->validate();

        Useruser::where('id',$this->user_id)->update([
            'name' => $validatedData['name'],
            'surname' => $validatedData['surname'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ]);
        session()->flash('message','User Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function deleteUser(int $user_id)
    {
        $this->user_id = $user_id;
    }

    public function destroyUser()
    {
        Useruser::find($this->user_id)->delete();
        session()->flash('message','User Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->surname = '';
        $this->email = '';
        $this->password = '';
    }

    public function render()
    {
        $users = Useruser::all();
        return view('livewire.user-show', ['users' => $users]);
    }
}
