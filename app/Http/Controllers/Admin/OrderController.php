<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItem;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->paginate(5);
        
        return view('admin.order.index', compact('orders'));
    }

    public function getItems(Request $request)
    {
        $items = OrderItem::with('product')->where('order_id', $request->get('order_id'))->get();
        return json_encode($items);
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        $delete = $order->delete();

        $message = $order ? 'Se ha eliminado el pedido correctamente' : 'No se ha podido eliminar el pedido';

        return redirect()->route('order.index')->with('message', $message);
    }
}
