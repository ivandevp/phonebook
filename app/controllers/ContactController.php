<?php

/**
* 
*/
class ContactController extends BaseController
{
	
	public function createcontact($user_id)
	{
		$user = User::find($user_id);
		$contact = new Contact();
		$contact->name = 'Contact 1';
		$contact->phone = '987672162';
		$contact->email = 'contact@web.com';
		$contact->address = 'contact address';
		$contact->usuario()->associate($user);
		$contact->save();
	}

	public function updatecontact($user_id, $contact_id)
	{
		$contact = Contact::find($user_id);
		$contact->name = 'Contact updated';
		$contact->email = 'contactupdated@web.com';
		$contact->save();
	}

	public function deletecontact($user_id, $contact_id)
	{
		$user = User::find($user_id);
		$contact = Contact::find($contact_id);
		$contact->delete();
	}

	public function contactlist($user_id)
	{
		$user = User::find($user_id);
		$contacts = $user->contact();
		return $contacts;
	}

	public function contactdetail($user_id, $contact_id)
	{
		$contact = Contact::find($contact_id);
		return "Contact details<br>Name: " . $contact->name . "<br>Email: " . $contact->email;
	}
}