<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
  public function index()
    {
        // show all blog posts
    }

    public function create()
    {
        //show form to create a blog post
    }

   
    public function store(Request $request)
    {

      $validated = $request->validate([
        'ticket_title' => 'required|max:32',
        'name' => 'required|max:32',
        'phone' => 'required',
        'company' => 'required|max:32',
        'message' => 'required|max:255',
        'file' => 'required',
      ]);

      if($validated) {

        $filenameWithExt = $request->file('file')->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('file')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('file')->storeAs('public/files',$fileNameToStore);

        Ticket::create([
          'ticket_title' => $request->ticket_title,
          'name' => $request->name,
          'phone' => $request->phone,
          'company' => $request->company,
          'message' => $request->message,
          'file_url' => $fileNameToStore,
          'user_id' => Auth::user()->id
        ]);
        
        return redirect('tickets');
      }
      return redirect('dashboard');
      
    }

    public function show()
    {
       $tickets = Ticket::where('user_id', Auth::user()->id)->get();;

       return view('tickets', [
         'tickets' => $tickets,
       ]);
    }

    
    public function edit(Ticket $ticket)
    {
        //show form to edit the post
    }

    
    public function update(Request $request, Ticket $ticket)
    {
        //save the edited post
    }

    
    public function destroy(Ticket $ticket)
    {
        //delete a post
    }
}
