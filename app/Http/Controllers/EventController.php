<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\EventModel;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getHomePage(){
        return view('admin.hometest');
    }

    public function getForm(){
        return view('admin.formCreateEvent');
    }

    public function createEvent(EventRequest  $request){
        $event = new EventModel();
        $event->eventName = $request->get('eventName');
        $event->bandNames = $request->get('bandNames');
        $event->startDate = $request->get('startDate');
        $event->endDate = $request->get('endDate');
        $event->portfolio = $request->get('portfolio');
        $event->ticketPrice = $request->get('ticketPrice');
        $event->status = $request->get('status');
        $event->save();
        $eventController = new EventController();
        return $eventController->getAll();
    }

    public function getAll(){
        $items = EventModel::all();
        return view('admin.allEvents', ['items'=>$items]);
    }

    //edit
    public function getEditDetail(Request $request){
        $id = $request->get('id');
        $event = EventModel::find($id);
        return view('admin.editDetail',['item'=>$event]);
    }

    public function processEdit(EventRequest  $request){
        $id = $request->get('id');
        $event = EventModel::find($id);
        $event->eventName = $request->get('eventName');
        $event->bandNames = $request->get('bandNames');
        $event->startDate = $request->get('startDate');
        $event->endDate = $request->get('endDate');
        $event->portfolio = $request->get('portfolio');
        $event->ticketPrice = $request->get('ticketPrice');
        $event->status = $request->get('status');
        $event->save();
        $eventController = new EventController();
        return $eventController->getAll();
    }

    //delete
    public function getDeleteDetail(Request $request){
        $id = $request->get('id');
        $event = EventModel::find($id);
        return view('admin.deleteDetail',['item'=>$event]);
    }

    public function processDelete(Request $request){
        $id = $request->get('id');
        $event = EventModel::find($id);
        $event->delete();
        $eventController = new EventController();
        return $eventController->getAll();
    }
}
