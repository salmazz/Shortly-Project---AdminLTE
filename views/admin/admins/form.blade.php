@if(session('message'))
<div class="alert alert-info">{{flash('message')}}</div>
  @endif
<div class="row">
    <div class="col-sm-6">
            <div class="form-group has-feedback @if($errors && $errors->has('first_name')) has-error @endif">
                    <input type="text" name="first_name" class="form-control" placeholder="FirstName" value="@if($old && $old['first_name']){{ $old['first_name'] }}@elseif(isset($admin)){{$admin->first_name}}@endif">
                    <span class="fa fa-user form-control-feedback"></span>
                    @if($errors && $errors->has('first_name'))
                        <div class="help-block">{{ $errors->first('first_name') }}</div>
                    @endif
                </div>
                <div class="form-group has-feedback @if($errors && $errors->has('last_name')) has-error @endif">
                        <input type="text" name="last_name" class="form-control" placeholder="LastName" value="@if($old && $old['last_name']){{ $old['last_name'] }}@elseif(isset($admin)){{$admin->last_name}}@endif">
                        <span class="fa fa-user form-control-feedback"></span>
                        @if($errors && $errors->has('last_name'))
                            <div class="help-block">{{ $errors->first('last_name') }}</div>
                        @endif
                    </div>
                    <div class="form-group has-feedback @if($errors && $errors->has('user_name')) has-error @endif">
                            <input type="text" name="user_name" class="form-control" placeholder="Username" value="@if($old && $old['user_name']){{ $old['user_name'] }}@elseif(isset($admin)){{$admin->user_name}}@endif">
                            <span class="fa fa-user form-control-feedback"></span>
                            @if($errors && $errors->has('user_name'))
                                <div class="help-block">{{ $errors->first('user_name') }}</div>
                            @endif
                        </div>
                        <div class="form-group has-feedback @if($errors && $errors->has('password')) has-error @endif">
                                <input type="password" name="password" class="form-control" placeholder="Password" value="{{$old?$old['password']:''}}">
                                <span class="fa fa-user form-control-feedback"></span>
                                @if($errors && $errors->has('password'))
                                    <div class="help-block">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
    </div>
</div>