<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class Auth extends Controller {
 public function login(){ if(session()->get('logged_in')) return redirect()->to('/dashboard'); return view('auth/login',['title'=>config('Project')->title]); }
 public function attempt(){ $u=trim((string)$this->request->getPost('username')); $p=(string)$this->request->getPost('password'); $db=db_connect(); $cfg=config('Project'); foreach($cfg->authTables as $table){ if(!$db->tableExists($table)) continue; $fields=array_map(fn($x)=>$x->name,$db->getFieldData($table)); if(!in_array('username',$fields)||!in_array('password',$fields)) continue; $row=$db->table($table)->where('username',$u)->get()->getRowArray(); if(!$row) continue; $ok=password_verify($p,(string)$row['password']) || hash_equals((string)$row['password'],$p); if($ok){$name=$u; foreach($cfg->authNameFields as $f) if(isset($row[$f])&&$row[$f]!==''){$name=$row[$f];break;} session()->set(['logged_in'=>true,'username'=>$u,'name'=>$name,'auth_table'=>$table]); return redirect()->to('/dashboard'); }} return redirect()->back()->withInput()->with('error','Username atau password salah.'); }
 public function logout(){ session()->destroy(); return redirect()->to('/login')->with('success','Berhasil logout.'); }
}
