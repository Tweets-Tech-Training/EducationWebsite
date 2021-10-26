<?php

namespace App\Http\Livewire\Halls;

use App\Models\Hall;
use Livewire\Component;
use Livewire\WithPagination;

class Halls extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search , $name , $hall_id , $computerized , $capacity;
    public $deleteId = '';
    public function render()
    {
        if($this->search) {

            $halls=Hall::orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            return view('livewire.halls.index',['halls'=>$halls,'id'=>''])->extends('dashboard_layout.main');
        }
        $halls= Hall::orderby('id','asc')->paginate(10);
        return view('livewire.halls.index',
            [
                'halls' =>$halls
            ])->extends('dashboard_layout.main');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function delete()
    {
        Hall::find($this->deleteId)->delete();

    }

    public function create()
    {

        $this->reset();
        $this->openModalPopover();
        $this->emit('modalShow','#CreateHallModal');
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }



    public function store()
    {
        $this->validate([

                'name' =>  $this->hall_id?'required|string|max:255|unique:halls,name, '. $this->hall_id:'required|string|max:255|unique:halls,name',
                'capacity' => 'required|numeric',
                'computerized' => 'nullable',

        ]);
        Hall::updateOrCreate(['id' => $this->hall_id], [
            'name' =>$this->name,
            'computerized' =>$this->computerized,
            'capacity' => $this->capacity,
        ]);
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
        ]);


        $this->closeModalPopover();
        $this->emit('modalHide','#CreateHallModal');
        $this->reset();
    }


    public function edit($id)
    {
        $hall=Hall::findorfail($id);
//        $category = CityModel::find($id);
        $this->hall_id = $id;
        $this->name = $hall->name;
        $this->computerized=$hall->computerized;
        $this->capacity = $hall->capacity;
        $this->updateMode = true;
        $this->emit('modalShow','#EditHallModal');

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->reset();
        $this->emit('modalHide','#EditHallModal');



    }

    public function update()
    {
        if ($this->hall_id) {
            $hall = Hall::find($this->hall_id);
            $this->validate([
                'name' =>  $this->hall_id?'required|string|max:255|unique:halls,name, '. $this->hall_id:'required|string|max:255|unique:halls,name',
                'capacity' => 'required|numeric',
                'computerized' => 'required',
            ]);
            $hall->update([
                'name' => $this->name,
                'computerized' =>$this->computerized,
                'capacity' => $this->capacity,

            ]);
            $this->updateMode = false;
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' =>'تم تعديل البيانات  بنجاح',
            ]);
            $this->reset();
            $this->emit('modalHide','#EditHallModal');

        }
    }


}
