<?php

class CommunicationController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $convos = Conversation::withUser(Adjective::user())->orderBy('updated_at')->get();
        foreach ($convos as &$convo) {
            $convo->names = array_reduce(
                $convo->participants->toArray(),
                function (&$result, $item) {
                    $result[$item['id']] = $item['fullName'];
                    return $result;
                },
                array()
            );
        }

        return View::make('communications', array("user" => Adjective::user(),
            "conversations" => $convos));
    }

    public function reply()
    {
        $conversation = Conversation::find(Input::get('conversation'))->first();
        $conversation->addMessage(Adjective::user(), Input::get('message'));
        return Redirect::route('comm');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
