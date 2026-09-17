<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class BaseCrudController extends Controller {
 protected string $table=''; protected string $title=''; protected string $pk='id'; protected array $fields=[]; protected array $relations=[];
 protected function db(){ return db_connect(); }
 public function index(){ $db=$this->db(); $b=$db->table($this->table); $q=trim((string)$this->request->getGet('q')); $filter=trim((string)$this->request->getGet('filter')); $cfg=config('Project'); if($cfg->stage>=10 && $q!==''){ $b->groupStart(); foreach($this->fields as $f){ if(str_starts_with($f,'id_')||str_contains($f,'password')) continue; $b->orLike($f,$q); } $b->groupEnd(); } $rows=$b->orderBy($this->pk,'DESC')->get()->getResultArray(); return view('crud/index',['title'=>$this->title,'table'=>$this->table,'pk'=>$this->pk,'fields'=>$this->fields,'rows'=>$rows,'relations'=>$this->relations]); }
 public function create(){ return view('crud/form',$this->formData()); }
 public function store(){ return $this->saveRow(); }
 public function edit($id){ $row=$this->db()->table($this->table)->where($this->pk,$id)->get()->getRowArray(); if(!$row) throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(); return view('crud/form',$this->formData($row)); }
 public function update($id){ return $this->saveRow($id); }
 public function delete($id){ $this->db()->table($this->table)->where($this->pk,$id)->delete(); return redirect()->to('/data/'.$this->table)->with('success','Data berhasil dihapus.'); }
 protected function saveRow($id=null){ $data=[]; foreach($this->fields as $f){ $v=$this->request->getPost($f); if($f==='password' && $v==='') continue; $data[$f]=$v; } $cfg=config('Project'); if($cfg->stage>=13){ foreach($this->fields as $f){ if(str_starts_with($f,'id_')||$f==='keterangan'||$f==='alamat'||str_contains($f,'password')) continue; if(isset($data[$f]) && trim((string)$data[$f])==='') return redirect()->back()->withInput()->with('error',ucwords(str_replace('_',' ',$f)).' wajib diisi.'); }} $b=$this->db()->table($this->table); $id ? $b->where($this->pk,$id)->update($data) : $b->insert($data); return redirect()->to('/data/'.$this->table)->with('success','Data berhasil disimpan.'); }
 protected function formData($row=[]){ $opts=[]; foreach($this->relations as $field=>$r){ [$table,$pk,$label]=$r; try{$opts[$field]=$this->db()->table($table)->select($pk.','.$label)->orderBy($label)->get()->getResultArray();}catch(\Throwable $e){$opts[$field]=[];} } return ['title'=>$this->title,'table'=>$this->table,'pk'=>$this->pk,'fields'=>$this->fields,'row'=>$row,'relations'=>$this->relations,'options'=>$opts]; }
}
