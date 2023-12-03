<?php
  $idEquipo = $_GET["id"];
  $equipo = ControladorEquipos::ctrMostrarEquipos("id", $idEquipo);
?>

<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Equipo</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard"> <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Equipo</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="email-wrap bookmark-wrap">
      <div class="row">
        <div class="col-xl-3 box-col-6">
          <div class="email-left-aside">
            <div class="card">
              <div class="card-body">
                <div class="email-app-sidebar left-bookmark task-sidebar">
                  <div class="media">
                    <div class="media-size-email"><img class="me-3 rounded-circle" src="../assets/images/user/user.png" alt=""></div>
                    <div class="media-body">
                      <h6 class="f-w-600"><?= $equipo["equipo"] ?></h6>
                      
                    </div>
                  </div>
                  <ul class="nav main-menu" role="tablist">
                    <li class="nav-item">
                      <button class="badge-light-primary btn-block btn-mail w-100" type="button"><i class="me-2" data-feather="check-circle"></i> Detalles</button>
                    </li>
                    <li><a id="general-tab" data-bs-toggle="pill" href="#general" role="tab" aria-controls="general" aria-selected="true"><span class="title"> Información General</span></a></li>
                    <li><a class="show" id="teclado-tab" data-bs-toggle="pill" href="#teclado" role="tab" aria-controls="teclado" aria-selected="false"><span class="title"> Teclado</span></a></li>
                    <li><a class="show" id="mouse-tab" data-bs-toggle="pill" href="#mouse" role="tab" aria-controls="mouse" aria-selected="false"><span class="title"> Mouse</span></a></li>
                    <li><a class="show" id="pantalla-tab" data-bs-toggle="pill" href="#pantalla" role="tab" aria-controls="pantalla" aria-selected="false"><span class="title">Pantalla</span></a></li>
                    <li><a class="show" id="cpu-tab" data-bs-toggle="pill" href="#cpu" role="tab" aria-controls="cpu" aria-selected="false"><span class="title">CPU</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-md-12 box-col-12">
          <div class="email-right-aside bookmark-tabcontent">
            <div class="card email-body radius-left">
              <div class="ps-0">
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                    <div class="card mb-0">
                      <div class="card-header d-flex">
                        <h5 class="mb-0">Información General</h5>
                      </div>
                      <div class="card-body p-0">
                        <div class="taskadd">
                          <div class="table-responsive">
                            <table class="table">
                              <div class="alert alert-dark inverse alert-dismissible fade show" role="alert"><i class="fa-solid fa-keyboard"></i>
                                <p><b> Teclado </b></p>   
                              </div>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Serie</h6>
                                </td>
                                <td>
                                  <p class="task_desc_0"><?= $equipo["serie_teclado"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Modelo</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["modelo_teclado"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                            </table>

                            <table class="table">
                              <div class="alert alert-primary inverse alert-dismissible fade show" role="alert"><i class="fa-solid fa-computer-mouse"></i>
                                <p><b> Mouse </b></p>   
                              </div>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Serie</h6>
                                </td>
                                <td>
                                  <p class="task_desc_0"><?= $equipo["serie_mouse"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Modelo</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["modelo_mouse"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                            </table>

                            <table class="table">
                              <div class="alert alert-secondary inverse alert-dismissible fade show" role="alert"><i class="fa-solid fa-desktop"></i>
                                <p><b> Pantalla</b></p>   
                              </div>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Serie</h6>
                                </td>
                                <td>
                                  <p class="task_desc_0"><?= $equipo["serie_pantalla"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Modelo</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["modelo_pantalla"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                            </table>

                            <table class="table">
                              <div class="alert alert-success inverse alert-dismissible fade show" role="alert"><i class="fa-solid fa-server"></i>
                                <p><b> CPU</b></p>   
                              </div>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Serie</h6>
                                </td>
                                <td>
                                  <p class="task_desc_0"><?= $equipo["serie_cpu"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Modelo</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["modelo_cpu"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Adaptador de Red</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["adaptador_red"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">RAM</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["ram"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Procesador</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["procesador"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Disco Duro</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["disco_duro"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">CD ROM</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["cd_rom"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fade tab-pane" id="teclado" role="tabpanel" aria-labelledby="teclado-tab">
                    <div class="card mb-0">
                      <div class="card-header d-flex">
                        <h6 class="mb-0">Teclado</h6><i class="fa-solid fa-keyboard"></i>
                      </div>
                      <div class="card-body p-0">
                        <div class="taskadd">
                          <div class="table-responsive">
                            <table class="table">
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Serie</h6>
                                </td>
                                <td>
                                  <p class="task_desc_0"><?= $equipo["serie_teclado"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Modelo</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["modelo_teclado"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fade tab-pane" id="mouse" role="tabpanel" aria-labelledby="mouse-tab">
                    <div class="card mb-0">
                      <div class="card-header d-flex">
                        <h6 class="mb-0">Mouse</h6><a href="#"><i class="fa-solid fa-computer-mouse"></i>
                      </div>
                      <div class="card-body p-0">
                        <div class="taskadd">
                          <div class="table-responsive">
                            <table class="table">
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Serie</h6>
                                </td>
                                <td>
                                  <p class="task_desc_0"><?= $equipo["serie_mouse"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Modelo</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["modelo_mouse"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fade tab-pane" id="pantalla" role="tabpanel" aria-labelledby="pantalla-tab">
                    <div class="card mb-0">
                      <div class="card-header d-flex">
                        <h6 class="mb-0">Pantalla</h6><a href="#"> <i class="me-2 fa-solid fa-desktop"></i></a>
                      </div>
                      <div class="card-body p-0">
                        <div class="taskadd">
                          <div class="table-responsive">
                            <table class="table">
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Serie</h6>
                                </td>
                                <td>
                                  <p class="task_desc_0"><?= $equipo["serie_pantalla"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Modelo</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["modelo_pantalla"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fade tab-pane" id="cpu" role="tabpanel" aria-labelledby="cpu-tab">
                    <div class="card mb-0">
                      <div class="card-header d-flex">
                        <h6 class="mb-0">CPU</h6><i class="m-2 fa-solid fa-server"></i>
                      </div>
                      <div class="card-body p-0">
                        <div class="taskadd">
                          <div class="table-responsive">
                            <table class="table">
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Serie</h6>
                                </td>
                                <td>
                                  <p class="task_desc_0"><?= $equipo["serie_cpu"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Modelo</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["modelo_cpu"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Adaptador de Red</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["adaptador_red"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">RAM</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["ram"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Procesador</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["procesador"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Disco Duro</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["disco_duro"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">CD ROM</h6>
                                </td>
                                <td>
                                <p class="task_desc_0"><?= $equipo["cd_rom"] ?></p>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                              
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fade tab-pane" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                    <div class="card mb-0">
                      <div class="card-header d-flex">
                        <h6 class="mb-0">This Month Tasks</h6><a href="#"><i class="me-2" data-feather="printer"></i>Print</a>
                      </div>
                      <div class="card-body">
                        <div class="details-bookmark text-center"><span>No tasks found.</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="fade tab-pane" id="pills-assigned" role="tabpanel" aria-labelledby="pills-assigned-tab">
                    <div class="card mb-0">
                      <div class="card-header d-flex">
                        <h6 class="mb-0">Assigned to me</h6><a href="#"><i class="me-2" data-feather="printer"></i>Print</a>
                      </div>
                      <div class="card-body p-0">
                        <div class="taskadd">
                          <div class="table-responsive">
                            <table class="table">
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Task name</h6>
                                  <p class="project_name_0">General</p>
                                </td>
                                <td>
                                  <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                </td>
                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a href="#"><i data-feather="more-horizontal"></i></a></td>
                                <td><a href="#"><i data-feather="trash-2"></i></a></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Task name</h6>
                                  <p class="project_name_0">General</p>
                                </td>
                                <td>
                                  <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                </td>
                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a href="#"><i data-feather="more-horizontal"></i></a></td>
                                <td><a href="#"><i data-feather="trash-2"></i></a></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Task name</h6>
                                  <p class="project_name_0">General</p>
                                </td>
                                <td>
                                  <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                </td>
                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a href="#"><i data-feather="more-horizontal"></i></a></td>
                                <td><a href="#"><i data-feather="trash-2"></i></a></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Task name</h6>
                                  <p class="project_name_0">General</p>
                                </td>
                                <td>
                                  <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                </td>
                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a href="#"><i data-feather="more-horizontal"></i></a></td>
                                <td><a href="#"><i data-feather="trash-2"></i></a></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Task name</h6>
                                  <p class="project_name_0">General</p>
                                </td>
                                <td>
                                  <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                </td>
                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a href="#"><i data-feather="more-horizontal"></i></a></td>
                                <td><a href="#"><i data-feather="trash-2"></i></a></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fade tab-pane" id="pills-tasks" role="tabpanel" aria-labelledby="pills-tasks-tab">
                    <div class="card mb-0">
                      <div class="card-header d-flex">
                        <h6 class="mb-0">My tasks</h6><a href="#"><i class="me-2" data-feather="printer"></i>Print</a>
                      </div>
                      <div class="card-body p-0">
                        <div class="taskadd">
                          <div class="table-responsive">
                            <table class="table">
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Task name</h6>
                                  <p class="project_name_0">General</p>
                                </td>
                                <td>
                                  <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                </td>
                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a href="#"><i data-feather="more-horizontal"></i></a></td>
                                <td><a href="#"><i data-feather="trash-2"></i></a></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Task name</h6>
                                  <p class="project_name_0">General</p>
                                </td>
                                <td>
                                  <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                </td>
                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a href="#"><i data-feather="more-horizontal"></i></a></td>
                                <td><a href="#"><i data-feather="trash-2"></i></a></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Task name</h6>
                                  <p class="project_name_0">General</p>
                                </td>
                                <td>
                                  <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                </td>
                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a href="#"><i data-feather="more-horizontal"></i></a></td>
                                <td><a href="#"><i data-feather="trash-2"></i></a></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Task name</h6>
                                  <p class="project_name_0">General</p>
                                </td>
                                <td>
                                  <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                </td>
                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a href="#"><i data-feather="more-horizontal"></i></a></td>
                                <td><a href="#"><i data-feather="trash-2"></i></a></td>
                              </tr>
                              <tr>
                                <td>
                                  <h6 class="task_title_0">Task name</h6>
                                  <p class="project_name_0">General</p>
                                </td>
                                <td>
                                  <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                </td>
                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a href="#"><i data-feather="more-horizontal"></i></a></td>
                                <td><a href="#"><i data-feather="trash-2"></i></a></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fade tab-pane" id="pills-notification" role="tabpanel" aria-labelledby="pills-notification-tab">
                    <div class="card mb-0">
                      <div class="card-header d-flex">
                        <h6 class="mb-0">Notification</h6><a href="#"><i class="me-2" data-feather="printer"></i>Print</a>
                      </div>
                      <div class="card-body">
                        <div class="details-bookmark text-center"><span>No tasks found.</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="fade tab-pane" id="pills-newsletter" role="tabpanel" aria-labelledby="pills-newsletter-tab">
                    <div class="card mb-0">
                      <div class="card-header d-flex">
                        <h6 class="mb-0">Newsletter</h6><a href="#"><i class="me-2" data-feather="printer"></i>Print</a>
                      </div>
                      <div class="card-body">
                        <div class="details-bookmark text-center"><span>No tasks found.</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade modal-bookmark" id="createtag" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Create Tag</h5>
                          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form class="form-bookmark needs-validation" novalidate="">
                            <div class="row">
                              <div class="mb-3 mt-0 col-md-12">
                                <label>Tag Name</label>
                                <input class="form-control" type="text" required="" autocomplete="off">
                              </div>
                              <div class="mt-0 col-md-12">
                                <label>Tag color</label>
                                <input class="form-color d-block" type="color" value="#563d7c">
                              </div>
                            </div>
                            <button class="btn btn-secondary" type="button">Save</button>
                            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>