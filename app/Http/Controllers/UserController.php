<?php

namespace App\Http\Controllers;

use Mail;
use App\Model\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Repositories\User\UserRepositoryInterface as UserRepo;
use App\Mail\UpgrateAccount;

class UserController extends Controller
{
    protected $userrepo;
    public function __construct(
        UserRepo $userrepo
    ) {
        $this->userrepo = $userrepo;
    }

    public function approveRequest()
    {
        return view('admin.approveRequest');
    }

    public function approveRequestDatatable()
    {
        $useres = $this->userrepo->getRequestUpdateAccount()->load('role')->toArray();
        // dd($useres);
            return Datatables::of($useres)
            ->addColumn('action', function ($user) {
                $user_id = $user['id'];

                return '<button data-user="' . $user_id . '"  class="approve btn btn-info" > Phê duyệt</button><button data-user="' . $user_id . '"  class="refuse btn btn-danger" > Từ chối</button>';
            })
            ->editColumn('avatar', function($user) {
                if ($user['avatar'] == null) {
                    $img = asset('/') . config('Custom.ImgDefaul');
                } else {
                    $img = asset('/') . $user['avatar'];
                }

                return '<img src=' . $img .' style="width:80px"/>';
            })
            ->editColumn('role', function($user) {
                return $user['role']['display_name'];
            })
            ->rawColumns([
                'action', 'avatar', 'role',
            ])
            ->make(true);
    }

    public function confirmRequest($id)
    {
        $user = $this->userrepo->find($id)->toArray();
        $data['account_status'] = 0;
        $data['role_id'] = config('Custom.roleVipUser');
        $this->userrepo->update($id, $data);
        // Mail::to($user['email'])->send(new UpgrateAccount($user));
        return response()->json(['success' => trans('message.success')]);
    }

    public function refuseRequest($id)
    {
        $user = $this->userrepo->find($id)->toArray();
        $data['account_status'] = 0;
        $this->userrepo->update($id, $data);
        // Mail::to($user['email'])->send(new UpgrateAccount($user));
        return response()->json(['success' => trans('message.success')]);
    }
}
