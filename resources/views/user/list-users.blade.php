@extends('app')

@section('link')
       <li><a href="{{ URL::asset('list-users') }}">List Users</a></li>
@stop


@section('content')
    <div class="workplace">

        <div class="row-fluid">
            <div class="span12 search">
                <form action="{{ asset('search-user') }}" method="post">
                    {!! csrf_field() !!}
                    <input type="text" class="span11" placeholder="Some text for search..." name="search"/>
                    <input class="btn span1" type="submit" value="Search"/>
                </form>
            </div>
        </div>
        <!-- /row-fluid-->

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Users Management</h1>

                    <div class="clear"></div>
                </div>
                <form action="{{ asset('user').'/'.$users->currentPage() }}" method="post">
                    {!! csrf_field() !!}
                <div class="block-fluid table-sorting">
                    <a href="{{ asset('add-user') }}" class="btn btn-add">Add User</a>
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                        <tr>
                            <th><input type="checkbox"/></th>
                            <th width="15%" class="sorting"><a href="#">ID</a></th>
                            <th width="35%" class="sorting"><a href="#">Username</a></th>
                            <th width="20%" class="sorting"><a href="#">Activate</a></th>
                            <th width="10%" class="sorting"><a href="#">Time Created</a></th>
                            <th width="10%" class="sorting"><a href="#">Time Updated</a></th>
                            <th width="10%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td><input type="checkbox" name="checkbox[]" value="{{ $user->id }}"/></td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                @if($user->activate == 1)
                                    <td><span class="text-success">Activated</span></td>
                                @else
                                    <td><span class="text-error">Deactivate</span></td>
                                @endif
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td><a href="{{ asset('edit-user').'/'.$user->id.'/'.$users->currentPage() }}" class="btn btn-info">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="bulk-action">
                        <input type="submit" class="btn btn-success" name="check" value=" Activate"/>
                        <input type="submit" class="btn btn-danger"  name="check" value="Delete"/>
                    </div><!-- /bulk-action-->
                    {!! $users->render() !!}
                    <div class="clear"></div>
                </div>
                </form>
            </div>
        </div>
        <div class="dr"><span></span></div>

    </div>

</div>
    <script>
        var input = document.getElementsByTagName('input');
        var selectAll = input[2];
        selectAll.onclick = function(){
            var state = (selectAll.checked) ? true : false;
            for (var i = 2; i < input.length; i++) {
                input[i].checked = state;
            }
        };
    </script>
@stop