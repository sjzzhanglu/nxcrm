{{-- 客户归属开始 --}}
<div class="card admin_users">
    <div class="box-body" style="text-align: center">
        <div class="row" style="padding: 20px 0">
            <div class="col-md-4 col-sm-4 col-12"><img src="/uploads/{{$admin_users['avatar']}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8 col-12">
                <h5> {{$admin_users['name']}}</h5>
                <span>添加于{{$customer['created_at']}}</span>
            </div>
        </div>
    </div>
</div>
{{-- 客户归属结束 --}}



{{-- 添加联系人开始 --}}
<div class="card add_contacts">
    <div class="box-body" style="text-align: center">
        <div class="row" style="padding: 20px 0">
            <div class="col-md-6 col-sm-6 col-12" style="border-right: 1px solid #e1e4e9">

                <a href="{{ route('contacts.create',['id'=>$customer['id']]) }}"><span><i
                            class="feather icon-plus"></i></span>添加</a>
            </div>
            <div class="col-md-6 col-sm-6 col-12"><a href=""><span><i class="feather icon-link"></i></span>关联</a></div>
        </div>
    </div>
</div>
{{-- 添加联系人结束 --}}


@if ($contacts->count() > 0)
@foreach ($contacts as $contact)
<div class="card contacts_card">

    <div class="box-header with-border" style="padding: .65rem 1rem">

        <div class="pull-left">
            <h3 class="box-title" style="line-height:30px;">{{$contact['name']}}</h3>
            <span class="badge badge-primary align-middle">{{$contact['position']}}</span>
        </div>
        <div class="pull-right">
            <a href="/admin/contacts/{{$contact['id']}}/edit"><i class="feather icon-edit-1"></i></a>
        </div>
    </div>


    <div class="box-body">


        <div class="row">
            <div class="col-md-12 col-sm-12 col-12"><i class="feather icon-phone"></i>{{$contact['phone']}}
            </div>
            <div class="col-md-12 col-sm-12 col-12"><i class="fa fa-wechat"></i>{{$contact['wechat']}}</div>
        </div>



    </div>

</div>
@endforeach
@else
<div class="card">
    <div class="box-body" style="padding:30px; text-align:center">
        没有联系人
    </div>
</div>
@endif
