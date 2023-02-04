@extends('layouts.index')
@section('users')
<style>
  table {
  table-layout: fixed;
}

th, td {
  padding: 5px 10px;
  border: 1px solid #000;
}

thead {
  background: #f9f9f9;
  display: table;
  width: 100%;
  width: calc(100% - 18px);
}

tbody {
  height: 400px;
  overflow: auto;
  display: block;
  width: 100%;
  tr {
    display: table;
    width: 100%;
    table-layout: fixed;
  }
}
.main{
        width: 100%;
        min-height: 300px;
       
    }
    .left{
        width: 48%;
        background-color: bisque;
        float: left;
        min-height: 300px;
        display: flex;
    }
    .left-l{
        width: 30%;
        background-color:aliceblue;
        float: left;
        min-height: 400px;
    }
   
    .left-r div input{
        margin-bottom: 10px;
      
    }
    .left-r div select{
        margin-bottom: 8px;
        
    }
    .left-l div{
        margin-bottom: 15px;
    }
    .left-r{
        width: 100%;
        background-color:darkgray;
        min-height: 300px;
    }
    .right{
        width: 49%;
        background-color: darkgray;
        min-height: 400px;
        margin-left: 51%;
    }
    .right-l{
        width: 30%;
        background-color:aliceblue;
        float: left;
        min-height: 400px;
    }
    .right-r div input{
        margin-bottom: 8px;
    }
    .right-l div{
        margin-bottom: 10px;
    }
    .right-r{
       
    }
    .vip{
        width: 35%;
        
       
        
    }
    .picture{
        width: 28%;
        background-color: aqua;
        height: 150px;
        margin-left:70px

    }
    
    .clear{
        clear: both;
    }
    /* pop-up */
    @media screen and (max-width: 560px) {
       
    }
</style>
<div class="row m-0 dashboard-btn-groups">
                      <div class="col-lg-2" style="border:1px solid black;">
                       <ul >
                           <li class="lii"><span class="Collapsable"><img width="18px" height="18px" src="{{asset('assets/images/folder.png')}}" alt="">&ensp;Sản Xuất(325)</span>
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
                        <div style="background-color:#C0C0C0;width:100%;height:30px; margin-left:-14px;margin-bottom:5px">        
                            <div style="margin:auto" class="btn-group" role="group" aria-label="Basic example">
                              <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Thêm Mới</button>
                              <button class="btn btn-outline-light btn-js" type="button">Làm Mới</button>
                              <button class="btn btn-outline-light btn-js" type="button">Xóa</button>
                              <button class="btn btn-outline-light btn-js" type="button">Xuất </button>
                              <form onsubmit="submitFn(this, event);">
                                <div class="search-wrapper">
                                    <div class="input-holder">
                                        <input type="text" class="search-input" placeholder="Type to search" />
                                        <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                                    </div>
                                    <span class="close" onclick="searchToggle(this, event);"></span>
                                    <div class="result-container">

                                    </div>
                                </div>
                            </form>
                          </div>        
                        </div>
                      
                              <table style=" height: 300px;overflow-y: auto; width: 100%;overflow-x: auto; margin-left:-15px"  class="table">
                                  
                                      
                                  
                                  <tbody>
                                        <tr style="background-color:darkgray;color:white">
                                          <th > <input style="font-size: 13px; width: 15px; height: 15px; padding-top: 20px;"  type="checkbox" id="btn1"   value="Chọn Hết"/></th>
                                          <th>ID</th>
                                          <th>Họ Tên</th>
                                         
                                          <th>Bộ Phận</th>
                                          <th>Số Thẻ</th>
                                          <th>Trạng Thái</th>
                                          <th>Hoạt Động</th>
                                        
                                      </tr>
                                    @foreach($users as $user)
                                      <tr>
                                        <td><input style="width: 15px; height: 15px;"  type="checkbox" id="btn1"   value="Chọn Hết"/></td>
                                        <td>{{$user->staff_code}}</td>
                                        <td>{{$user->full_name}}</td>
                                       
                                        <td>{{$user->id_card}}</td>
                                        <td>{{$user->id_card}}</td>
                                        <td><input style=" width: 15px; height: 20px; padding-top: 15px;" type="checkbox" checked name="" id=""></td>
                                        <td >
                                          <!-- <button type="button" id="info"  value="{{$user->staff_id}}" class="btn btn-primary btn-lg info" data-toggle="modal" data-target="#loadModall">
                                              <span style="font-size:10px">Sửa</span>
                                          </button> -->
                                          <button value="{{$user->staff_id}}" class=" btn-primary info" type="button" data-toggle="modal" data-target="#exampleModalfat" data-whatever="@mdo"><i class="icofont icofont-ui-edit"></i></button>
                                          <button value="{{$user->staff_id}}" class=" btn-danger info" type="button" data-toggle="modal" data-target="#exampleModalfat" data-whatever="@mdo"><i class="icofont icofont-ui-delete"></i></button>

                                        </td>
                                      </tr>
                                    @endforeach                      
                                    </tbody>     
                              </table>
                            
                        
                      </div>
                    </div>                    
@endsection                      