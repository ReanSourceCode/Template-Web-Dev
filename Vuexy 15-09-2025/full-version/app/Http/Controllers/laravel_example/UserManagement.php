<?php

namespace App\Http\Controllers\laravel_example;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\View;

class UserManagement extends Controller
{
  /**
   * Redirect to user-management view.
   *
   */
  public function UserManagement(): View
  {
    // dd('UserManagement');
    $users = User::all();
    $userCount = $users->count();
    $verified = User::whereNotNull('email_verified_at')->get()->count();
    $notVerified = User::whereNull('email_verified_at')->get()->count();
    $usersUnique = $users->unique(['email']);
    $userDuplicates = $users->diff($usersUnique)->count();

    return view('content.laravel-example.user-management', [
      'totalUser' => $userCount,
      'verified' => $verified,
      'notVerified' => $notVerified,
      'userDuplicates' => $userDuplicates,
    ]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request): JsonResponse
  {
    $columns = [
      1 => 'id',
      2 => 'name',
      3 => 'email',
      4 => 'email_verified_at',
    ];

    $totalData = User::count(); // Total records without filtering
      $totalFiltered = $totalData;

      $limit = $request->input('length');
      $start = $request->input('start');
      $order = $columns[$request->input('order.0.column')] ?? 'id';
      $dir = $request->input('order.0.dir') ?? 'desc';

      $query = User::query();

      // Search handling
    if (!empty($request->input('search.value'))) {
      $search = $request->input('search.value');

      $query->where(function ($q) use ($search) {
        $q->where('id', 'LIKE', "%{$search}%")
          ->orWhere('name', 'LIKE', "%{$search}%")
          ->orWhere('email', 'LIKE', "%{$search}%");
      });

      $totalFiltered = $query->count();
    }

    $users = $query->offset($start)
      ->limit($limit)
      ->orderBy($order, $dir)
      ->get();

    $data = [];
    $ids = $start;

    foreach ($users as $user) {
      $data[] = [
        'id' => $user->id,
        'fake_id' => ++$ids,
        'name' => $user->name,
        'email' => $user->email,
        'email_verified_at' => $user->email_verified_at,
      ];
    }

    // ✅ Always return full DataTables structure, even if no results
    return response()->json([
      'draw' => intval($request->input('draw')),
      'recordsTotal' => intval($totalData),
      'recordsFiltered' => intval($totalFiltered),
      'data' => $data,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $userID = $request->id;

    if ($userID) {
      // update the value
      $users = User::updateOrCreate(
        ['id' => $userID],
        ['name' => $request->name, 'email' => $request->email]
      );

      // user updated
      return response()->json('Updated');
    } else {
      // create new one if email is unique
      $userEmail = User::where('email', $request->email)->first();

      if (empty($userEmail)) {
        $users = User::updateOrCreate(
          ['id' => $userID],
          ['name' => $request->name, 'email' => $request->email, 'password' => bcrypt(Str::random(10))]
        );

        // user created
        return response()->json('Created');
      } else {
        // user already exist
        return response()->json(['message' => "already exits"], 422);
      }
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id): JsonResponse
  {
    $user = User::findOrFail($id);
    return response()->json($user);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id) {}

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $users = User::where('id', $id)->delete();
  }
}