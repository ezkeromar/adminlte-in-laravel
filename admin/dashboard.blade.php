@extends('admin.layout')



@section('admincontent')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1 style="display: inline-block;">
      Campaignes
      <small>preview of listes of compaignes</small>
    </h1>
    <div class="pull-right" style="display: inline-block;">
      <a href="{{url('/compaign/create')}}" class="btn btn-block btn-primary">Crée une campaigne</a>
    </div>
  </section>

  <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Liste des campaignes</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Order Name</th>
                  <th>Advertiser Name</th>
                  <th>Agency Name</th>
                  <th>Channels Name</th>
                  <th>Campaign Name</th>
                  <th>Mainsalesperson Name</th>
                  <th></th>
                </tr>
                @foreach ($campaigns->orders as $campaign)
                  <tr>
                    <td><a href="{{url('/compaign/'.$campaign->key_order)}}">{{$campaign->order_name}}</a></td>
                    <td>{{$campaign->advertiser_name}}</td>
                    <td>{{$campaign->agency_name}}</td>
                    <td>{{$campaign->channels_name}}</td>
                    <td>{{$campaign->campaign_name}}</td>
                    <td>{{$campaign->mainsalesperson_name}}</td>
                    <td><a href="{{url('/compaign/'.$campaign->key_order)}}" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
                  </tr>
                @endforeach
                <!-- <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  </section>
</div>

@endsection