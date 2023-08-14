<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::with('organizations')->latest()->get();
        // dd($members);
        return view('superadministrator.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organizations = Organization::all();
        return view('superadministrator.members.create', compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'member_id' => 'required|unique:members',
            'organization_id' => 'required',
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' =>'required|string|max:255',
        ]);

         Member::create($formFields);

        return redirect(route('member.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('superadministrator.members.show', [
            'member' => $member
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('superadministrator.members.edit', [
            'member' => $member
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $formFields = $request->validate([
            'member_id' => ['required',Rule::unique('members')->ignore($member->id)],
            'organization_id' => 'required',
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' =>'required|string|max:255',
        ]);

         $member->update($formFields);

        return redirect(route('member.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect(route('member.index'));
    }
}
