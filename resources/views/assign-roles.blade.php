@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('تخصيص الأدوار') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('assign-roles.assign') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="user_id" class="form-label">اختر المستخدم</label>
                                <select name="user_id" class="form-select" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="roles" class="form-label">اختر الأدوار</label>
                                <select name="roles[]" class="form-select" multiple required>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">تخصيص الأدوار</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
