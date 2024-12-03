<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Order;
use App\Models\Message;
class BackendController extends Controller
{
    public function adminDashboard(){

          $idcount = Product::count('id');
          $categorycount = Category::count('id');
          $totalsubcategory = Subcategory::count('id');
          $totalsell = Order::where('status','completed')->sum('total_amount');

          $message_count = Message::where('is_read','0')->count();



        return view('backend.master.index',compact('idcount','categorycount','totalsell','totalsubcategory','message_count'));
    }


    public function showUnreadMessage(){

        $message_count = Message::where('is_read','0')->count();
        $unreadmessage = Message::where('is_read','0')->get();
    
        Message::where('is_read','0')->update([
    
            'is_read' => '1',
    
        ]);
    
        return view('backend.message.unread_messages',compact('unreadmessage','message_count'));
        
    }
    
    public function showAllMessage(){
    
        $all_message = Message::all();
    
        return view('backend.message.all_message',compact('all_message'));
    }
    
    
    
    // delete Read Message methode start
    public function deleteReadMessage($id){
       
        Message::where('id',$id)->delete();
    
        return response()->json(['success' => 'Item deleted successfully!']);
    }
    // delete Read Message methode end
    
    public function deleteUnreadMessage($id){
    
        Message::where('id',$id)->delete();
    
        return response()->json(['success' => 'Item deleted successfully!']);
    }
    
}
