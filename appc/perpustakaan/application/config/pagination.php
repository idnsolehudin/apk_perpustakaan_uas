<?php
$config['num_links'] = 1;
$config['use_page_numbers'] = TRUE;
// $config['reuse_query_string'] = TRUE;
// $config['uri_segment'] = 10;

// <li class="page-item disabled">
//                                     <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-long-arrow-alt-left"></i></a>
//                                 </li>
//                                 <li class="page-item"><a class="page-link" href="#">1</a></li>
//                                 <li class="page-item active" aria-current="page">
//                                     <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
//                                 </li>
//                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
//                                 <li class="page-item">
//                                     <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
//                                 </li>

$config['first_link']       = 'First';
$config['last_link']        = 'Last';
$config['next_link']        = 'Next';
$config['prev_link']        = 'Prev';
$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-end">';
$config['full_tag_close']   = '</ul></nav></div>';
$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
$config['num_tag_close']    = '</span></li>';
$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
$config['prev_tagl_close']  = '</span>Next</li>';
$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
$config['first_tagl_close'] = '</span></li>';
$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
$config['last_tagl_close']  = '</span></li>';
