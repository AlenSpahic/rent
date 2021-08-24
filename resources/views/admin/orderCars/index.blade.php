@extends('layouts.master')



@section('content')



  <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">New Orders</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        From
                      </th>
                      <th>
                        To
                      </th>
                      <th>
                        From Date
                      </th>
                      <th>
                        To Date
                      </th>
                    </thead>
                    <tbody>
                      @foreach($orders as $order)
                      <tr>
                        <td>
                         {{$order->from_destination}}
                        </td>
                        <td>
                          {{$order->to_destination}}
                        </td>
                        <td>
                          {{$order->start_date}}
                        </td>
                        <td>
                          {{$order->end_date}}
                        </td>
                        <td class="text-right">
                        </td>
                        <td class="text-right">
                      
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection


@section('scripts')

@endsection