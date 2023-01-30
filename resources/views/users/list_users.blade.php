@extends('layouts.index')
@section('users')
<div class="row m-0 dashboard-btn-groups">
                      <div class="col-lg-2" style="border:1px solid black;">
                        <ul >
                              <li class="lii"><span class="Collapsable"><img width="18px" height="18px" src="{{asset('assets/images/folder.png')}}" alt="">&ensp;Sản Xuất</span>
                                  <ul>
                                      <li><span class="Collapsable sub"><img width="18px" height="18px" src="{{asset('assets/images/folder.png')}}" alt="">&ensp;thư mục 1</span></li>
                                      <li><span class="Collapsable sub"><img width="18px" height="18px" src="{{asset('assets/images/folder.png')}}" alt="">&ensp;thư mục 2</span></li>
                                          
                                  </ul>
                                </li>
                                <li class="lii"><span class="Collapsable"><img width="18px" height="18px" src="{{asset('assets/images/folder.png')}}" alt="">&ensp;Hành Chính</span>
                                <li class="lii"><span class="Collapsable"><img width="18px" height="18px" src="{{asset('assets/images/folder.png')}}" alt="">&ensp;Kinh Doanh</span>
                                        <ul>
                                        <li><span class="Collapsable sub"><img width="18px" height="18px" src="{{asset('assets/images/folder.png')}}" alt="">&ensp;thư mục 2</span></li>
                                        <li><span class="Collapsable sub"><img width="18px" height="18px" src="{{asset('assets/images/folder.png')}}" alt="">&ensp;thư mục 2</span></li>
                                        <li><span class="Collapsable sub"><img width="18px" height="18px" src="{{asset('assets/images/folder.png')}}" alt="">&ensp;thư mục 2</span></li>
                                        <li><span class="Collapsable sub"><img width="18px" height="18px" src="{{asset('assets/images/folder.png')}}" alt="">&ensp;thư mục 2</span></li>
                                        </ul>
                                </li>
                                
                              
                          </ul>  
                        
                      </div>
                      <div class="col-lg-10" style="border: 1px solid black;">
                        <div style="background-color:#C0C0C0;width:100%;height:30px; margin-left:-14px">        
                            <div style="margin:auto" class="btn-group" role="group" aria-label="Basic example">
                              <button class="btn btn-outline-light btn-js" type="button">Thêm Mới</button>
                              <button class="btn btn-outline-light btn-js" type="button">Làm Mới</button>
                              <button class="btn btn-outline-light btn-js" type="button">Xóa</button>
                              <button class="btn btn-outline-light btn-js active" type="button">Xuất </button>
                          </div>        
                        </div>
                        <div  class="card-body" style=" width: 99%;overflow-x: auto;">
                              <table  id="datatablesSimple">
                                  <thead style="background-color:black; color: white; ">
                                      <tr>
                                          <th> <input style="font-size: 13px; width: 20px; height: 20px; padding-top: 20px;"  type="checkbox" id="btn1"   value="Chọn Hết"/></th>
                                          <th>ID</th>
                                          <th>Họ</th>
                                          <th>Tên</th>
                                          <th>Bộ Phận</th>
                                          <th>Số Thẻ</th>
                                          <th>Trạng Thái</th>
                                          <th>Hoạt Động</th>
                                      </tr>
                                  </thead>
                                  <tbody id="output_search">
                                    @foreach($users as $user)
                                      <tr>
                                        <td><input style="font-size: 13px; width: 20px; height: 20px; padding-top: 20px;"  type="checkbox" id="btn1"   value="Chọn Hết"/></td>
                                        <td>{{$user->staff_code}}</td>
                                        <td>{{$user->last_mid_name}}</td>
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->id_card}}</td>
                                        <td>{{$user->id_card}}</td>
                                        <td>Active</td>
                                        <td>
                                          <button type="button" id="info"  value="{{$user->staff_id}}" class="btn btn-primary btn-lg info" data-toggle="modal" data-target="#myModal">
                                              <span style="font-size:10px">Sửa</span>
                                          </button>
                                        </td>
                                      </tr>
                                    @endforeach                      
                                    </tbody>     
                              </table>
                            <div id="myModal"  class="modal fade" tabindex="-1" role="dialog">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5>Thông Tin Nhân Sự</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  
                                  </div>
                                  <div class="modals-body">
                                     
                                      <div class="clear"></div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                      </div>
                    </div>
@endsection                      