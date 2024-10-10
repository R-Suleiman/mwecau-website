<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use App\Http\Requests\FooterRequest;

class FooterController extends Controller
{
    public function show()
    {
        $footer = Footer::orderByDesc('created_at')->get();
        return view("admin.footer.manage-web-footer", compact('footer'));
    }
    public function storeFooterView()
    {
        return view("admin.footer.new-footer-item");
    }
    public function storeFooter(FooterRequest $request)
    {
        Footer::create($request->validated());
        return redirect()->back()->with('message', 'Footer Item Added successfully');
    }

    public function edit($itemName)
    {
        $footerItem = Footer::where('name', $itemName)->first();
        return view("admin.footer.edit-footer", compact("footerItem"));
    }
    public function updateFooter(FooterRequest $request, $id)
    {
        Footer::findOrFail($id)->update($request->validated());
        return redirect()->route("admin.footer.item.list.view")->with("message", "Item updated Successfully");
    }
    public function destroyFooter($footer)
    {
        $item = Footer::findOrFail($footer);
        $item->delete();
        return redirect()->back()->with("message", "Selected item  has been deleted Successfully");
    }
}
