<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Facades\ResultData;
use App\Http\Controllers\Controller;
use App\Likeable;
use App\Link;
use App\Direct;
use App\Product;
use App\Sh4\sh4Auth;
use App\Sh4\sh4Tools;
use App\Storyable;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Image;
use Result;
use Validator;


class UserController extends Controller
{
    use sh4Auth;

}
