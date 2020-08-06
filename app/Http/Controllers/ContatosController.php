<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrmContatos;
use App\ErpContatos;

class ContatosController extends Controller
{
    public function get_all_contacts(){
        $erpContacts = ErpContatos::all();
        $crmContacts = CrmContatos::all();
        
        return view('contatos.contatos', 
                    [
                        'erpContacts' => $erpContacts, 
                        'crmContacts' => $crmContacts
                    ]);
    }

    public function delete_contacts_with_invalid_email(){        
        $erpContacts = ErpContatos::all();
        $crmContacts = CrmContatos::all();

        $allContacts = $erpContacts->merge($crmContacts);

        foreach ($allContacts as $contact) {
            if(filter_var($contact->email, FILTER_VALIDATE_EMAIL) == false){
                $contact->invalid = 1;
                $contact->save();
            }
        }

        return redirect('/contacts');
    }

    public function delete_contacts($type, $id_contact){
        if($type == 'crm'){
            $contact = CrmContatos::findOrFail($id_contact);
        }else{
            $contact = ErpContatos::findOrFail($id_contact);
        }
        $contact->status = 0;
        $contact->save();

        return $contact;
    }

    public function restore_contacts($type, $id_contact){
        if($type == 'crm'){
            $contact = CrmContatos::findOrFail($id_contact);
        }else{
            $contact = ErpContatos::findOrFail($id_contact);
        }
        $contact->status = 1;
        $contact->save();

        return $contact;
    }
}
