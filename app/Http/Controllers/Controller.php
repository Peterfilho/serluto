<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function flashSuccess($message) {
     $this->setupFlash("Sucesso!", $message, 'success');
  }

  public function flashError($message) {
     $this->setupFlash("Ops! Algo deu errado!", $message, 'error');
  }

  public function flashConfirmation(){
    $this->setupConfirmation(
      "Atenção",
      "Não será possível desfazer isso futuramente!",
      "warning",
      "true",
      "#53ad23",
      "#d33",
      "Sim, excluir",
    );
  }

  public function setupConfirmation($title, $text, $icon, $showCancelButton, $confirmButtonColor, $cancelButtonColor, $confirnButtonText) {
    request()->session()->flash('swal_confirm_msg', [
      'title' => $title,
      'text' => $text,
      'icon' => $icon,
      'showCancelButton' => $showCancelButton,
      'confirmButtonColor' => $confirmButtonColor,
      'cancelButtonColor' => $cancelButtonColor,
      'confirmButtonText' => $confirnButtonText,
    ]);
  //   ]).then(function(e) {
  //     if (e.value === true) {
  //       flashSuccess("Excluido com sucesso");
  //     }else {
  //       e.dismiss;
  //     }
  //   }, function(dismiss) {
  //       return false;
  //     });
 }

  private function setupFlash($title, $message, $type) {
     request()->session()->flash('swal_msg', [
        'title' => $title,
        'message' => $message,
        'type' => $type,
     ]);
  }
}
