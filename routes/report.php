<?php

Route::get('/testing', function () {
  $pdf = \PDF::loadView('test');
  // $pdf->setPaper('A4', 'landscape');
  return $pdf->stream();
});
