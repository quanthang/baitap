<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create(){
        return view('events/form',[
            'current' => null
        ]);
    }

    public function list(Request $request){
        $queryBuilder = Event::query();
        $search = $request->query('search');
        $status = $request->query('status');
        if($search && strlen($search) > 0){
            $queryBuilder = $queryBuilder->where('eventName','like','%'.$search.'%')
                ->orWhere('bandNames','like','%'.$search.'%')
                ->orWhere('portfolio','like','%'.$search.'%');
        }
        if($status){
            $queryBuilder = $queryBuilder->where('status',$status);
        }
        $events = $queryBuilder->paginate(10)->appends(['search' => $search, 'status' => $status]);

        return view('events/list',[
            'list' => $events,
            'status' => $status
        ]);
    }
    public function store(EventRequest $request){
        $events = new Event();
        $events->fill($request->validated());
        $events->save();
        return redirect('/admin/events/list');
    }
    public function update($id){
        $currentEvent = Event::find($id);
        return view('events/form',[
            'current' => $currentEvent
        ]);
    }

    public function save(Request $request,$id){
        $detailEvent = Event::find($id);
        $detailEvent->update($request->all());
        $detailEvent->save();
        return redirect('/admin/events/list');
    }
    public function delete($id){
        $detailEvent = Event::find($id);
        $detailEvent->delete();
        return redirect('/admin/events/list');
    }
}
