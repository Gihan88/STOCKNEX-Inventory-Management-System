<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">

<title>STOCKNEX | Dashboard</title>

<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>

@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap');
:root{--ink:#f8f9ff;--muted:#bdc9e9;--accent:#b7a3ff;--edge:rgba(255,255,255,.19);--shadow:0 22px 70px rgba(2,8,35,.30)}
*{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;color:var(--ink);font:600 16px/1.6 'Manrope','Segoe UI',sans-serif;background:#0d1430;background-image:radial-gradient(ellipse 52% 52% at 11% 10%,rgba(128,91,232,.42),transparent 80%),radial-gradient(ellipse 55% 48% at 95% 12%,rgba(45,169,228,.30),transparent 78%),radial-gradient(ellipse 54% 54% at 65% 96%,rgba(185,83,189,.27),transparent 78%);background-attachment:fixed}body:before{content:'';position:fixed;inset:0;z-index:-1;pointer-events:none;background:linear-gradient(125deg,transparent 20%,rgba(255,255,255,.035) 50%,transparent 75%)}a{color:inherit;text-decoration:none}button,input{font:inherit}button{cursor:pointer}a:focus-visible,button:focus-visible,input:focus-visible{outline:3px solid #c8bdff;outline-offset:3px}
.shell{display:grid;grid-template-columns:264px minmax(0,1fr);gap:26px;min-height:100vh;padding:28px;max-width:1700px;margin:auto}.glass{background:linear-gradient(135deg,rgba(255,255,255,.18),rgba(255,255,255,.075));border:1px solid var(--edge);box-shadow:var(--shadow),inset 0 1px 0 rgba(255,255,255,.26);backdrop-filter:blur(30px) saturate(155%);-webkit-backdrop-filter:blur(30px) saturate(155%);border-radius:28px}
.sidebar{position:sticky;top:28px;height:calc(100vh - 56px);display:flex;flex-direction:column;padding:27px 16px;overflow-y:auto;background:linear-gradient(165deg,rgba(255,255,255,.20),rgba(255,255,255,.06))}.brand{display:flex;align-items:center;gap:13px;padding:4px 10px 24px;border-bottom:1px solid rgba(255,255,255,.15)}.mark{width:48px;height:48px;display:grid;place-items:center;border-radius:16px;background:linear-gradient(135deg,#c4a6ff,#7c8aff);color:#161d47;font-size:26px;font-weight:800;box-shadow:0 8px 25px #9d8bf466}.brand strong{font-size:22px;letter-spacing:-.8px;font-weight:800}.brand small{display:block;color:#d3d7f4;font-size:12px}.nav-caption{font-size:11px;font-weight:800;color:#c1c9eb;letter-spacing:1.7px;margin:26px 14px 13px}.nav{display:flex;align-items:center;gap:12px;padding:13px 14px;border-radius:16px;font-size:14px;font-weight:800;margin-bottom:8px;transition:transform .22s,background .22s,box-shadow .22s;border:1px solid transparent;color:#edf0ff}.nav .ico{width:27px;text-align:center;font-size:21px}.nav:hover{transform:translateX(5px);background:rgba(255,255,255,.18);border-color:rgba(255,255,255,.18);box-shadow:0 10px 25px #080c2855}.nav.active{background:linear-gradient(110deg,rgba(197,172,255,.44),rgba(121,147,255,.38));border-color:rgba(255,255,255,.30);box-shadow:0 12px 28px #181d5355}.sidebar-end{margin-top:auto;border-top:1px solid rgba(255,255,255,.16);padding-top:13px}.logout{width:100%;background:none;text-align:left;color:#ffd5e1}.logout:hover{background:rgba(255,125,161,.18)}
.main{min-width:0}.topbar{display:flex;justify-content:space-between;align-items:center;padding:15px 23px;gap:14px;margin-bottom:24px;background:rgba(255,255,255,.10)}.search-top{font-size:14px;color:#d5dcf8}.account{display:flex;align-items:center;gap:12px;font-size:15px;font-weight:800}.avatar{width:43px;height:43px;border-radius:50%;background:linear-gradient(135deg,#c8b6ff,#87e4f3);display:grid;place-items:center;font-weight:800;color:#202552}.menu-toggle{display:none;border:0;border-radius:13px;background:#fff3;padding:8px 13px;font-size:23px;color:#fff}
.heading{position:relative;overflow:hidden;display:flex;justify-content:space-between;align-items:center;gap:18px;margin:0 0 23px;padding:32px 34px;min-height:195px;border:1px solid rgba(255,255,255,.25);border-radius:29px;background:linear-gradient(112deg,rgba(148,114,239,.49),rgba(64,123,211,.33) 58%,rgba(87,212,230,.25));box-shadow:var(--shadow)}.heading:before{content:'';position:absolute;width:260px;height:260px;border:1px solid rgba(255,255,255,.23);border-radius:50%;right:70px;top:-160px;box-shadow:0 0 0 40px rgba(255,255,255,.045),0 0 0 90px rgba(255,255,255,.025);pointer-events:none}.heading h1{position:relative;font-size:clamp(30px,3vw,43px);letter-spacing:-1.7px;margin:0;font-weight:800;line-height:1.23}.heading p{position:relative;margin:12px 0 0;color:#f0f2ff;font-size:16px;max-width:550px}.pill{position:relative;flex-shrink:0;background:rgba(255,255,255,.18);border:1px solid #ffffff60;border-radius:100px;padding:11px 17px;font-weight:800;color:#fff;font-size:13px;backdrop-filter:blur(8px)}
.stats{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:18px}.card{padding:23px 21px;min-width:0;min-height:190px;transition:transform .23s,box-shadow .23s;background:linear-gradient(145deg,rgba(255,255,255,.22),rgba(255,255,255,.075))}.card:nth-child(2){background:linear-gradient(145deg,rgba(111,195,245,.24),rgba(255,255,255,.07))}.card:nth-child(3){background:linear-gradient(145deg,rgba(188,142,248,.25),rgba(255,255,255,.06))}.card:nth-child(4){background:linear-gradient(145deg,rgba(253,168,195,.19),rgba(255,255,255,.06))}.card:hover,.panel:hover{transform:translateY(-5px);box-shadow:0 27px 65px #050c2b77}.card-top{display:flex;align-items:center;justify-content:space-between;gap:8px}.card-label{font-size:15px;color:#e2e8ff;font-weight:800}.card-icon{display:grid;place-items:center;font-size:23px;width:50px;height:50px;border-radius:16px;background:rgba(255,255,255,.18);border:1px solid rgba(255,255,255,.23)}.card-value{font-size:clamp(38px,3.7vw,53px);font-weight:800;line-height:1.2;margin:18px 0 5px;letter-spacing:-1.7px}.card-note{font-size:13px;color:#d2d9f4}.columns{display:grid;grid-template-columns:minmax(0,1.55fr) minmax(290px,1fr);gap:19px;margin-top:20px}.panel{min-width:0;padding:25px;transition:transform .22s,box-shadow .22s;background:linear-gradient(140deg,rgba(255,255,255,.16),rgba(255,255,255,.065))}.panel-title{display:flex;align-items:center;justify-content:space-between;gap:12px;margin-bottom:19px}.panel h2{font-size:22px;margin:0;font-weight:800}.panel p{font-size:13px;color:#cbd3f0;margin:5px 0 0}.link{color:#d8c7ff;font-weight:800;font-size:14px}.filter{display:block;width:100%;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.26);border-radius:14px;padding:13px 15px;margin-bottom:17px;color:#fff;font-size:15px;outline:none}.filter::placeholder{color:#d2d8f0}.filter:focus{border-color:#b5a4ff;box-shadow:0 0 0 3px #b5a4ff33}.table-wrap{overflow-x:auto}table{width:100%;border-collapse:collapse;min-width:510px}th,td{text-align:left;padding:16px 10px;border-bottom:1px solid #ffffff25;font-size:14px}th{font-size:12px;text-transform:uppercase;letter-spacing:.9px;color:#d0d8f6;font-weight:800}td{font-weight:700}.code{color:#c2c9e5;font-size:12px}.badge{display:inline-block;border-radius:100px;padding:6px 10px;font-size:12px;font-weight:800;background:#a3f1d4;color:#15533f}.badge.low{background:#ffdb9c;color:#76450b}.badge.none{background:#ffc1d2;color:#7b1e3c}.quick{display:flex;gap:13px;align-items:center;padding:15px;margin-bottom:11px;background:rgba(255,255,255,.10);border:1px solid rgba(255,255,255,.17);border-radius:18px;transition:transform .22s,box-shadow .22s,background .22s}.quick:hover{transform:translateX(5px);background:rgba(255,255,255,.20);box-shadow:0 12px 25px #050b2a55}.quick-ico{display:grid;place-items:center;width:47px;height:47px;flex-shrink:0;border-radius:14px;background:rgba(183,163,255,.25);font-size:23px}.quick strong{font-size:15px}.quick small{display:block;font-size:12px;color:#d0d8f4}.empty{color:#d2d9f2;text-align:center;padding:24px}.overlay{display:none}
@media(max-width:1280px){.stats{grid-template-columns:repeat(2,minmax(0,1fr))}.columns{grid-template-columns:1fr}}@media(max-width:850px){.shell{display:block;padding:12px}.sidebar{position:fixed;top:0;left:0;z-index:30;width:min(310px,85vw);height:100vh;transform:translateX(-110%);transition:transform .22s;border-radius:0 25px 25px 0}.sidebar.open{transform:translateX(0)}.overlay.show{display:block;position:fixed;inset:0;background:#07102b99;z-index:20}.menu-toggle{display:block}.topbar{padding:14px 16px}.heading{margin-top:16px;padding:26px 23px}}@media(max-width:560px){.stats{grid-template-columns:1fr}.heading{align-items:flex-start;flex-direction:column}.panel{padding:17px}.account .username{max-width:115px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.card-value{font-size:44px}}@media(prefers-reduced-motion:reduce){*,*:before,*:after{transition:none!important;animation:none!important}}

</style>

</head>

<body>

@php

$totalUsers=\App\Models\User::count();

$totalCustomers=\Illuminate\Support\Facades\DB::table('customers')->count();

$totalProducts=\Illuminate\Support\Facades\DB::table('products')->count();

$lowStock=\Illuminate\Support\Facades\DB::table('products')->where('quantity','<',10)->count();

$recentProducts=\Illuminate\Support\Facades\DB::table('products')->orderByDesc('id')->limit(6)->get();

@endphp

<div class="overlay" id="overlay" onclick="setMenu(false)"></div>

<div class="shell">

<aside class="sidebar glass" id="sidebar">

<a href="{{ route('dashboard') }}" class="brand"><span class="mark">S</span><span><strong>STOCKNEX</strong><small>Inventory workspace</small></span></a>

<div class="nav-caption">MAIN MENU</div>

<a class="nav active" href="{{ route('dashboard') }}"><span class="ico">◫</span> Dashboard</a>

<a class="nav" href="{{ route('users.index') }}"><span class="ico">♙</span> User Management</a>

<a class="nav" href="{{ route('customers.index') }}"><span class="ico">♧</span> Customer Management</a>

<a class="nav" href="{{ route('products.index') }}"><span class="ico">▣</span> Product Management</a>

<div class="sidebar-end"><div class="nav-caption" style="margin-top:4px">SYSTEM</div>

<a class="nav" href="{{ route('settings.index') }}"><span class="ico">⚙</span> Settings</a>

<form method="POST" action="{{ route('logout') }}">@csrf<button class="nav logout" type="submit"><span class="ico">↪</span> Logout</button></form>

</div></aside>

<main class="main">

<header class="topbar glass"><div style="display:flex;align-items:center;gap:13px"><button class="menu-toggle" type="button" onclick="setMenu(true)" aria-label="Open menu">☰</button><span class="search-top">Workspace / <strong>Dashboard</strong></span></div><div class="account"><span class="username">{{ auth()->user()->name }}</span><span class="avatar">{{ strtoupper(substr(auth()->user()->name,0,1)) }}</span></div></header>

<section class="heading"><div><h1>Dashboard Overview ✨</h1><p>Welcome back, {{ auth()->user()->name }}. Here's your inventory at a glance.</p></div><span class="pill">● Workspace active</span></section>

<section class="stats">

<div class="card glass"><div class="card-top"><span class="card-label">Total Users</span><span class="card-icon">👥</span></div><div class="card-value">{{ number_format($totalUsers) }}</div><div class="card-note">Registered accounts</div></div>

<div class="card glass"><div class="card-top"><span class="card-label">Customers</span><span class="card-icon">🤝</span></div><div class="card-value">{{ number_format($totalCustomers) }}</div><div class="card-note">Customer records</div></div>

<div class="card glass"><div class="card-top"><span class="card-label">Products</span><span class="card-icon">📦</span></div><div class="card-value">{{ number_format($totalProducts) }}</div><div class="card-note">Inventory items</div></div>

<div class="card glass"><div class="card-top"><span class="card-label">Low Stock</span><span class="card-icon">⚠️</span></div><div class="card-value">{{ number_format($lowStock) }}</div><div class="card-note">Below 10 units</div></div>

</section>

<section class="columns"><div class="panel glass"><div class="panel-title"><div><h2>Recent Products</h2><p>Latest items added to your inventory</p></div><a class="link" href="{{ route('products.index') }}">View all →</a></div><input class="filter" id="productSearch" type="search" placeholder="Search recent products by name or code…" aria-label="Search recent products"><div class="table-wrap"><table><thead><tr><th>Product</th><th>Price</th><th>Qty</th><th>Status</th></tr></thead><tbody id="productRows">@forelse($recentProducts as $product)<tr><td><strong>{{ $product->name }}</strong><div class="code">{{ $product->code }}</div></td><td>Rs. {{ number_format((float)$product->price,2) }}</td><td>{{ $product->quantity }}</td><td>@if($product->quantity <= 0)<span class="badge none">Out of stock</span>@elseif($product->quantity < 10)<span class="badge low">Low stock</span>@else<span class="badge">In stock</span>@endif</td></tr>@empty<tr><td colspan="4" class="empty">No products yet.</td></tr>@endforelse</tbody></table></div><p id="noMatches" class="empty" hidden>No matching products.</p></div>

<div class="panel glass"><div class="panel-title"><div><h2>Quick Navigation</h2><p>Get where you need to go</p></div></div><a class="quick" href="{{ route('users.index') }}"><span class="quick-ico">👥</span><span><strong>Manage Users</strong><small>View and update accounts</small></span><span style="margin-left:auto">→</span></a><a class="quick" href="{{ route('customers.index') }}"><span class="quick-ico">🤝</span><span><strong>Manage Customers</strong><small>Keep customer details organized</small></span><span style="margin-left:auto">→</span></a><a class="quick" href="{{ route('products.index') }}"><span class="quick-ico">📦</span><span><strong>Manage Products</strong><small>Track your inventory</small></span><span style="margin-left:auto">→</span></a><a class="quick" href="{{ route('settings.index') }}"><span class="quick-ico">⚙️</span><span><strong>Account Settings</strong><small>Profile and password</small></span><span style="margin-left:auto">→</span></a></div></section>

</main></div>

<script>

function setMenu(open){document.getElementById('sidebar').classList.toggle('open',open);document.getElementById('overlay').classList.toggle('show',open)}

document.getElementById('productSearch').addEventListener('input',function(){let visible=0;document.querySelectorAll('#productRows tr').forEach(function(row){if(row.querySelector('td[colspan]'))return;let match=row.textContent.toLowerCase().includes(document.getElementById('productSearch').value.toLowerCase());row.hidden=!match;if(match)visible++});document.getElementById('noMatches').hidden=visible!==0 || !document.getElementById('productSearch').value});

</script>

</body></html>
