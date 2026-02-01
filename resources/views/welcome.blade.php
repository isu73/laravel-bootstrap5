@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <div class="text-center">
                <div>
                    <svg class="d-block mx-auto transition-all translate-y-0 opacity-100 duration-750" style="width:200px; height:auto;" viewBox="0 0 438 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.2036 -3H0V102.197H49.5189V86.7187H17.2036V-3Z" fill="currentColor" />
                        <path d="M110.256 41.6337C108.061 38.1275 104.945 35.3731 100.905 33.3681C96.8667 31.3647 92.8016 30.3618 88.7131 30.3618C83.4247 30.3618 78.5885 31.3389 74.201 33.2923C69.8111 35.2456 66.0474 37.928 62.9059 41.3333C59.7643 44.7401 57.3198 48.6726 55.5754 53.1293C53.8287 57.589 52.9572 62.274 52.9572 67.1813C52.9572 72.1925 53.8287 76.8995 55.5754 81.3069C57.3191 85.7173 59.7636 89.6241 62.9059 93.0293C66.0474 96.4361 69.8119 99.1155 74.201 101.069C78.5885 103.022 83.4247 103.999 88.7131 103.999C92.8016 103.999 96.8667 102.997 100.905 100.994C104.945 98.9911 108.061 96.2359 110.256 92.7282V102.195H126.563V32.1642H110.256V41.6337ZM108.76 75.7472C107.762 78.4531 106.366 80.8078 104.572 82.8112C102.776 84.8161 100.606 86.4183 98.0637 87.6206C95.5202 88.823 92.7004 89.4238 89.6103 89.4238C86.5178 89.4238 83.7252 88.823 81.2324 87.6206C78.7388 86.4183 76.5949 84.8161 74.7998 82.8112C73.004 80.8078 71.6319 78.4531 70.6856 75.7472C69.7356 73.0421 69.2644 70.1868 69.2644 67.1821C69.2644 64.1758 69.7356 61.3205 70.6856 58.6154C71.6319 55.9102 73.004 53.5571 74.7998 51.5522C76.5949 49.5495 78.738 47.9451 81.2324 46.7427C83.7252 45.5404 86.5178 44.9396 89.6103 44.9396C92.7012 44.9396 95.5202 45.5404 98.0637 46.7427C100.606 47.9451 102.776 49.5487 104.572 51.5522C106.367 53.5571 107.762 55.9102 108.76 58.6154C109.756 61.3205 110.256 64.1758 110.256 67.1821C110.256 70.1868 109.756 73.0421 108.76 75.7472Z" fill="currentColor" />
                        <path d="M242.805 41.6337C240.611 38.1275 237.494 35.3731 233.455 33.3681C229.416 31.3647 225.351 30.3618 221.262 30.3618C215.974 30.3618 211.138 31.3389 206.75 33.2923C202.36 35.2456 198.597 37.928 195.455 41.3333C192.314 44.7401 189.869 48.6726 188.125 53.1293C186.378 57.589 185.507 62.274 185.507 67.1813C185.507 72.1925 186.378 76.8995 188.125 81.3069C189.868 85.7173 192.313 89.6241 195.455 93.0293C198.597 96.4361 202.361 99.1155 206.75 101.069C211.138 103.022 215.974 103.999 221.262 103.999C225.351 103.999 229.416 102.997 233.455 100.994C237.494 98.9911 240.611 96.2359 242.805 92.7282V102.195H259.112V32.1642H242.805V41.6337ZM241.31 75.7472C240.312 78.4531 238.916 80.8078 237.122 82.8112C235.326 84.8161 233.156 86.4183 230.614 87.6206C228.07 88.823 225.251 89.4238 222.16 89.4238C219.068 89.4238 216.275 88.823 213.782 87.6206C211.289 86.4183 209.145 84.8161 207.35 82.8112C205.554 80.8078 204.182 78.4531 203.236 75.7472C202.286 73.0421 201.814 70.1868 201.814 67.1821C201.814 64.1758 202.286 61.3205 203.236 58.6154C204.182 55.9102 205.554 53.5571 207.35 51.5522C209.145 49.5495 211.288 47.9451 213.782 46.7427C216.275 45.5404 219.068 44.9396 222.16 44.9396C225.251 44.9396 228.07 45.5404 230.614 46.7427C233.156 47.9451 235.326 49.5487 237.122 51.5522C238.917 53.5571 240.312 55.9102 241.31 58.6154C242.306 61.3205 242.806 64.1758 242.806 67.1821C242.805 70.1868 242.305 73.0421 241.31 75.7472Z" fill="currentColor" />
                        <path d="M438 -3H421.694V102.197H438V-3Z" fill="currentColor" />
                        <path d="M139.43 102.197H155.735V48.2834H183.712V32.1665H139.43V102.197Z" fill="currentColor" />
                        <path d="M324.49 32.1665L303.995 85.794L283.498 32.1665H266.983L293.748 102.197H314.242L341.006 32.1665H324.49Z" fill="currentColor" />
                        <path d="M376.571 30.3656C356.603 30.3656 340.797 46.8497 340.797 67.1828C340.797 89.6597 356.094 104 378.661 104C391.29 104 399.354 99.1488 409.206 88.5848L398.189 80.0226C398.183 80.031 389.874 90.9895 377.468 90.9895C363.048 90.9895 356.977 79.3111 356.977 73.269H411.075C413.917 50.1328 398.775 30.3656 376.571 30.3656ZM357.02 61.0967C357.145 59.7487 359.023 43.3761 376.442 43.3761C393.861 43.3761 395.978 59.7464 396.099 61.0967H357.02Z" fill="currentColor" />
                    </svg>
                </div>
            </div>
            <div class="badge badge-xl text-bg-warning align-middle mt-1">{{ app()->version() }}</div>
            <h1>+</h1>
            <h1 class="display-5 fw-bold">
                 Bootstrap 5
            </h1>

            <button class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#demoModal">Installed Composer Packages</button>
        </div>
    </header>

    <!-- GRID & FLEX SYSTEM -->
    <section id="grid" class="py-5">
        <div class="container">
            <h2 class="mb-4">🎯 Rács- és Flex rendszer</h2>
            <p class="lead">
                A Bootstrap 5 <code>.container</code>, <code>.row</code> és <code>.col-*</code> osztályokra épül.
                A rácsot a <strong>flexbox</strong> motor működteti, így a <code>d-flex</code> utility-kkel is szabadon kiegészíthető.
            </p>

            <!-- CONTAINER VS CONTAINER-FLUID -->
            <div class="container border p-3 mb-4">
                <h5 class="text-muted">Container példa (fix max-szélesség)</h5>
                <div class="row g-2 text-center">
                    <div class="col-md-4 demo-box">col-md-4</div>
                    <div class="col-md-4 demo-box">col-md-4</div>
                    <div class="col-md-4 demo-box">col-md-4</div>
                </div>
            </div>

            <div class="container-fluid border p-3 mb-5">
                <h5 class="text-muted">Container-fluid példa (teljes szélesség)</h5>
                <div class="row g-2 text-center">
                    <div class="col-6 col-md-3 demo-box">col-6 col-md-3</div>
                    <div class="col-6 col-md-3 demo-box">col-6 col-md-3</div>
                    <div class="col-6 col-md-3 demo-box">col-6 col-md-3</div>
                    <div class="col-6 col-md-3 demo-box">col-6 col-md-3</div>
                </div>
            </div>

            <!-- FLEXBOX BASICS -->
            <h4 class="mb-3">💪 Flexbox alapok</h4>
            <div class="d-flex border p-2 mb-3 bg-body-secondary rounded">
                <div class="p-2 bg-primary text-white flex-fill text-center">1</div>
                <div class="p-2 bg-success text-white flex-fill text-center">2</div>
                <div class="p-2 bg-warning flex-fill text-center">3</div>
            </div>
            <p class="small text-muted">
                <code>.d-flex</code> + <code>.flex-fill</code> = elemek egy sorban, egyenlő szélességgel
            </p>

            <!-- JUSTIFY CONTENT -->
            <h5 class="mt-4">Vízszintes igazítás – <code>justify-content-*</code></h5>
            <div class="border p-3 mb-3">
                <div class="d-flex justify-content-start mb-2">
                    <div class="p-2 bg-primary text-white">Start</div>
                    <div class="p-2 bg-secondary text-white">Elem</div>
                </div>
                <div class="d-flex justify-content-center mb-2">
                    <div class="p-2 bg-primary text-white">Center</div>
                    <div class="p-2 bg-secondary text-white">Elem</div>
                </div>
                <div class="d-flex justify-content-end mb-2">
                    <div class="p-2 bg-primary text-white">End</div>
                    <div class="p-2 bg-secondary text-white">Elem</div>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <div class="p-2 bg-primary text-white">Between</div>
                    <div class="p-2 bg-secondary text-white">Elem</div>
                </div>
                <div class="d-flex justify-content-around">
                    <div class="p-2 bg-primary text-white">Around</div>
                    <div class="p-2 bg-secondary text-white">Elem</div>
                </div>
            </div>

            <!-- ALIGN ITEMS -->
            <h5 class="mt-4">Függőleges igazítás – <code>align-items-*</code> és <code>align-self-*</code></h5>

            <div class="border p-3 mb-3 d-flex bg-body-secondary" style="height:120px;">
                <div class="p-2 bg-info text-body align-self-start">Start</div>
                <div class="p-2 bg-warning text-body align-self-center">Center</div>
                <div class="p-2 bg-success text-white align-self-end">End</div>
            </div>

            <p class="small text-muted">
                A <code>d-flex</code> szülőben az egyes elemek <code>align-self-*</code> osztályokkal önállóan igazíthatók függőlegesen.
            </p>

            <h5 class="mt-4">Függőleges igazítás – külön sorokban</h5>

            <div class="border p-3 mb-3 bg-body-secondary">
                <div class="d-flex align-items-start mb-2" style="height:40px;">
                    <div class="p-2 bg-info text-body">Start</div>
                    <div class="p-2 bg-warning text-body">Elem</div>
                </div>
                <div class="d-flex align-items-center mb-2" style="height:40px;">
                    <div class="p-2 bg-info text-body">Center</div>
                    <div class="p-2 bg-warning text-body">Elem</div>
                </div>
                <div class="d-flex align-items-end" style="height:40px;">
                    <div class="p-2 bg-info text-body">End</div>
                    <div class="p-2 bg-warning text-body">Elem</div>
                </div>
            </div>

            <!-- FLEX DIRECTION & WRAP -->
            <h5 class="mt-4">Irány & tördelés – <code>flex-row</code> / <code>flex-column</code> / <code>flex-wrap</code></h5>
            <div class="d-flex flex-row flex-wrap border p-2 bg-body-secondary mb-3" style="max-width:420px;">
                <div class="p-2 m-1 bg-primary text-white">Elem 1</div>
                <div class="p-2 m-1 bg-success text-white">Elem 2</div>
                <div class="p-2 m-1 bg-warning text-body">Elem 3</div>
                <div class="p-2 m-1 bg-danger text-white">Elem 4</div>
                <div class="p-2 m-1 bg-info text-body">Elem 5</div>
            </div>
            <p class="small text-muted">
                <code>.flex-wrap</code> engedélyezi, hogy az elemek új sorba törjenek.
            </p>

            <!-- GAP & ORDER -->
            <h5 class="mt-4">Gap és sorrend</h5>
            <div class="d-flex gap-3 border p-3 bg-body-secondary mb-3">
                <div class="p-2 bg-primary text-white order-3">1 (order-3)</div>
                <div class="p-2 bg-secondary text-white order-1">2 (order-1)</div>
                <div class="p-2 bg-success text-white order-2">3 (order-2)</div>
            </div>
            <p class="small text-muted">A <code>gap-*</code> spacing a flex-elemek közötti rést szabályozza,
                az <code>order-*</code> a megjelenítési sorrendet.</p>
        </div>
    </section>


    <!-- COLORS & TEXT DEMO -->
    <section id="colors" class="py-5 bg-body">
        <div class="container">
            <h2 class="mb-4">🎨 Színek, szöveg és háttér effektek</h2>

            <p class="lead">
                Bootstrap 5 rengeteg <code>.text-*</code> és <code>.bg-*</code> utility osztályt kínál.
            </p>

            <div class="row g-3">
                <!-- Text colors -->
                <div class="col-md-6">
                    <h5>Szöveg színek</h5>
                    <p class="text-primary">.text-primary</p>
                    <p class="text-success">.text-success</p>
                    <p class="text-danger">.text-danger</p>
                    <p class="text-warning">.text-warning</p>
                    <p class="text-info">.text-info</p>
                    <p class="text-muted">.text-muted</p>
                    <p class="text-decoration-underline">.text-decoration-underline</p>
                    <p class="fw-bold">.fw-bold</p>
                    <p class="fst-italic">.fst-italic</p>
                </div>

                <!-- Background colors -->
                <div class="col-md-6">
                    <h5>Háttér színek</h5>
                    <div class="p-2 mb-2 bg-primary text-white rounded">.bg-primary</div>
                    <div class="p-2 mb-2 bg-success text-white rounded">.bg-success</div>
                    <div class="p-2 mb-2 bg-danger text-white rounded">.bg-danger</div>
                    <div class="p-2 mb-2 bg-warning text-body rounded">.bg-warning</div>
                    <div class="p-2 mb-2 bg-info text-body rounded">.bg-info</div>
                    <div class="p-2 mb-2 bg-dark text-white rounded">.bg-dark</div>
                    <div class="p-2 mb-2 bg-body-secondary text-body rounded border">.bg-body-secondary</div>
                </div>
            </div>

            <hr class="my-4">

            <div class="row g-3">
                <!-- Borders & Shadows -->
                <div class="col-md-6">
                    <h5>Keretek és árnyékok</h5>
                    <div class="p-3 mb-2 border border-primary rounded">.border .border-primary</div>
                    <div class="p-3 mb-2 border border-3 border-success rounded-3">.border-3 .border-success</div>
                    <div class="p-3 mb-2 shadow-sm">.shadow-sm</div>
                    <div class="p-3 mb-2 shadow">.shadow</div>
                    <div class="p-3 mb-2 shadow-lg">.shadow-lg</div>
                </div>

                <!-- Gradients & Opacity -->
                <div class="col-md-6">
                    <h5>Gradiensek & Átlátszóság</h5>
                    <div class="p-4 mb-3 text-white bg-gradient" style="background-image: linear-gradient(45deg, #0d6efd, #6610f2);">
                        Egyéni gradient background
                    </div>
                    <div class="p-3 mb-2 bg-danger bg-opacity-50 text-white rounded">.bg-danger.bg-opacity-50</div>
                    <div class="p-3 mb-2 bg-success bg-opacity-25 text-body rounded">.bg-success.bg-opacity-25</div>
                    <div class="p-3 mb-2 bg-info bg-opacity-75 text-body rounded">.bg-info.bg-opacity-75</div>
                </div>
            </div>

            <hr class="my-4">

            <div class="row align-items-center">
                <!-- Text truncation -->
                <div class="col-md-6">
                    <h5>Szöveg vágása (Text truncation)</h5>
                    <p>Használd <code>.text-truncate</code> osztályt a túl hosszú szövegek levágására:</p>
                    <div class="border p-2 text-truncate" style="max-width: 250px;">
                        Ez egy nagyon hosszú szöveg, amely nem fér ki teljesen a dobozban, ezért három ponttal rövidül.
                    </div>
                    <p class="mt-2">
                        <small>💡 Ehhez <code>display: inline-block</code> vagy <code>block</code> kell, valamint fix szélesség.</small>
                    </p>
                </div>

                <!-- Vertical rule -->
                <div class="col-md-6">
                    <h5>Vertical rule (függőleges elválasztó)</h5>
                    <div class="d-flex align-items-center" style="height: 80px;">
                        <div>Bal oldal</div>
                        <div class="vr mx-3"></div>
                        <div>Jobb oldal</div>
                    </div>
                    <p class="text-muted small mt-2">A <code>.vr</code> elem <code>border-left</code>-ot használ, automatikus magassággal és margin-nal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM VALIDATION -->
    <section id="forms" class="py-5 bg-body">
        <div class="container">
            <h2 class="mb-4">🧾 Forms – Checks & Radios + Validálás</h2>
            <div class="row g-4">
                <div class="col-lg-7">
                     DEMÓ FORM — HTML5 + Bootstrap validation
                    <form id="demoForm" class="needs-validation" novalidate method="POST" action="{{ route('form-demo') }}">
                        @csrf
                         Név (floating)
                        <div class="form-floating mb-3">
                            <input type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   id="name"
                                   name="name"
                                   placeholder="Név"
                                   value="{{ old('name') }}"
                                   required minlength="3" maxlength="60">
                            <label for="name">Név</label>
                            <div class="invalid-feedback">
                                Kérlek adj meg egy 3–60 karakter közötti nevet.
                            </div>
                            @error('name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                         Email (floating)
                        <div class="form-floating mb-3">
                            <input type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   id="email"
                                   name="email"
                                   placeholder="name@example.com"
                                   value="{{ old('email') }}"
                                   required>
                            <label for="email">Email</label>
                            <div class="invalid-feedback">
                                Valós email címet adj meg.
                            </div>
                            @error('email')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                         Input group (ikon/gomb)
                        <div class="mb-3">
                            <label for="username" class="form-label">Felhasználónév</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text"
                                       class="form-control @error('username') is-invalid @enderror"
                                       id="username"
                                       name="username"
                                       placeholder="pl. istvan"
                                       value="{{ old('username') }}"
                                       required>
                                <button type="button" class="btn btn-outline-secondary" id="checkUsername">Check</button>
                                <div class="invalid-feedback">
                                    A felhasználónév kötelező.
                                </div>
                            </div>
                            @error('username')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                         Select
                        <div class="mb-3">
                            <label for="role" class="form-label">Szerepkör</label>
                            <select class="form-select @error('role') is-invalid @enderror" id="role" name="role" required>
                                <option value="" selected disabled>Válassz...</option>
                                <option value="user"  @selected(old('role')==='user')>Felhasználó</option>
                                <option value="admin" @selected(old('role')==='admin')>Admin</option>
                                <option value="guest" @selected(old('role')==='guest')>Vendég</option>
                            </select>
                            <div class="invalid-feedback">Kötelező választani.</div>
                            @error('role')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                         CHECKS (checkboxok)
                        <div class="mb-3">
                            <label class="form-label d-block">Értesítések</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="email" id="notifEmail" name="notifications[]" @checked(collect(old('notifications'))->contains('email'))>
                                <label class="form-check-label" for="notifEmail">Email</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="sms" id="notifSms" name="notifications[]" @checked(collect(old('notifications'))->contains('sms'))>
                                <label class="form-check-label" for="notifSms">SMS</label>
                            </div>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="checkbox" value="push" id="notifPush" name="notifications[]" @checked(collect(old('notifications'))->contains('push'))>
                                <label class="form-check-label" for="notifPush">Push (inline)</label>
                            </div>
                        </div>

                         RADIOS (exkluzív választás)
                        <div class="mb-3">
                            <label class="form-label d-block">Terv</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="plan" id="planBasic" value="basic" @checked(old('plan')==='basic') required>
                                <label class="form-check-label" for="planBasic">Basic</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="plan" id="planPro" value="pro" @checked(old('plan')==='pro')>
                                <label class="form-check-label" for="planPro">Pro</label>
                                <div class="invalid-feedback">Válassz tervet.</div>
                            </div>
                        </div>

                         SWITCH
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" role="switch" id="agree" name="agree" value="1" {{ old('agree') ? 'checked' : '' }} required>
                            <label class="form-check-label" for="agree">Elfogadom a feltételeket</label>
                            <div class="invalid-feedback">A feltételek elfogadása kötelező.</div>
                        </div>

                         Üzenet (textarea)
                        <div class="mb-3">
                            <label for="message" class="form-label">Üzenet</label>
                            <textarea class="form-control @error('message') is-invalid @enderror"
                                      id="message" name="message" rows="3"
                                      placeholder="Rövid üzenet...">{{ old('message') }}</textarea>
                            @error('message')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-send me-1"></i> Küldés
                            </button>
                            <button class="btn btn-outline-secondary" type="reset">Visszaállítás</button>
                        </div>
                    </form>
                </div>

                 Oldalsáv – magyarázat
                <div class="col-lg-5">
                    <div class="p-3 rounded-3 bg-body-tertiary border">
                        <h5 class="mb-2">ℹ️ Hogyan működik a validálás?</h5>
                        <ul class="mb-0">
                            <li><code>novalidate</code> + <code>.needs-validation</code> a formon</li>
                            <li>mezőkön HTML5 attribútumok: <code>required</code>, <code>minlength</code>, <code>type=email</code> stb.</li>
                            <li>minden mező alatt <code>.invalid-feedback</code> blokk</li>
                            <li>JS a submit eseményre → ha hibás, megakadályozza és ráteszi a <code>.was-validated</code>-et</li>
                            <li>Laravel hiba esetén: <code>@ error</code> + <code>is-invalid</code> + server üzenet</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (session('status'))
        <div class="toast align-items-center text-bg-success border-0 position-fixed bottom-0 end-0 m-3 show" role="alert">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="bi bi-check-circle me-2"></i>{{ session('status') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    @endif


    <!-- CUSTOM CSS -->
    <section id="custom-css" class="py-5 bg-body">
        <div class="container">
            <h2 class="mb-4">🎨 Egyedi Bootstrap kiterjesztés <code>:root</code> változókkal</h2>

            <div class="alert alert-info">
                A Bootstrap 5.3-tól kezdve a témák és színek <code>CSS változókkal</code> (<code>--bs-*</code>) kezelhetők.
                Ezeket a <strong>:root</strong> szintjén bármikor bővítheted vagy felülírhatod, és így saját stílusosztályokat hozhatsz létre.
            </div>

            <h5 class="mt-4">🔹 Példa: saját színek és gombosztály hozzáadása</h5>

            <div class="d-flex justify-content-end">
                <button class="btn btn-outline-secondary btn-sm copy-btn" data-copy-target="#code-css-root">Copy</button>
            </div>

            <pre id="code-css-root">
/* resources/sass/_custom.scss */
<code>:root {
  /* Saját színek */
  --bs-brand: #7952b3;
  --bs-accent: #ff5722;

  /* Saját árnyalatok a dark módhoz (opcionális) */
  [data-bs-theme="dark"] {
    --bs-brand: #b48cff;
    --bs-accent: #ff8a50;
  }
}</code>

/* Új Bootstrap-kompatibilis osztályok */
<code>.btn-brand {
  --bs-btn-bg: var(--bs-brand);
  --bs-btn-border-color: var(--bs-brand);
  --bs-btn-hover-bg: color-mix(in oklab, var(--bs-brand) 85%, black);
  --bs-btn-hover-border-color: color-mix(in oklab, var(--bs-brand) 75%, black);
  --bs-btn-color: #fff;
}

.text-accent { color: var(--bs-accent) !important; }
.bg-accent { background-color: var(--bs-accent) !important; }
.border-accent { border-color: var(--bs-accent) !important; }
</code></pre>

            <p class="mt-3">
                A _custom.scss fájl az app.scss fájlba van importálva <code>@use "custom";</code> így az app.blade.php fájl head tag-ban nem kell további vite importokat alkalmazni.
                <br>Most már bármelyik komponensnél használhatod:
            </p>

            <pre><code class="language-html">
<button class="btn btn-brand">Brand gomb</button>
<p class="text-accent">Ez egy kiemelt szöveg</p>
<div class="border-accent p-3 rounded">Accent keretes doboz</div>
</code></pre>

            <hr class="my-5">

            <h5>🔹 Példa: új Bootstrap CSS változók használata</h5>
            <p>A Bootstrap rengeteg előre definiált változót tartalmaz, amiket te is használhatsz saját komponensekhez:</p>

            <pre><code class="language-css">
.card-custom {
  background-color: var(--bs-body-bg);
  color: var(--bs-body-color);
  border: 1px solid var(--bs-border-color);
  box-shadow: 0 0.5rem 1rem rgba(var(--bs-body-color-rgb), 0.1);
  transition: background-color 0.3s, color 0.3s;
}

.card-custom:hover {
  background-color: var(--bs-body-bg);
  color: var(--bs-primary);
}
</code></pre>

            <div class="card card-custom mt-4 p-3">
                <h5 class="card-title mb-2">Példa saját kártyára</h5>
                <p class="card-text">Ez a doboz a Bootstrap változókat használja — automatikusan vált a Dark / Light mód között!</p>
                <button class="btn btn-brand">Mutasd</button>
            </div>

            <hr class="my-5">

            <h4 class="mb-3">📘 Összefoglaló</h4>
            <ul>
                <li>Használd a <code>:root</code>-ban a <code>--bs-*</code> változókat, hogy ne kelljen a Bootstrap forrást módosítanod.</li>
                <li>Használj <code>color-mix()</code>-et árnyalatok előállításához.</li>
                <li>Tedd a saját CSS-edet a <code>resources/css/app.css</code> vagy <code>custom.css</code> végére, hogy felülírja az alapot.</li>
                <li>Ne feledd: a Dark módhoz a <code>[data-bs-theme="dark"]</code> blokkban újra beállíthatod a változókat.</li>
            </ul>
        </div>
    </section>

    <!-- ICONS DEMO -->
    <section id="icons" class="py-5 bg-body border-top">
        <div class="container">
            <h2 class="mb-4">🎨 Bootstrap Icons bemutató</h2>
            <p class="lead">A <code>bootstrap-icons</code> csomag több mint <strong>1800</strong> ikont tartalmaz.
                Használat: <code>&lt;i class="bi bi-ikon-név"&gt;&lt;/i&gt;</code></p>

            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-4 text-center">
                <div class="col">
                    <i class="bi bi-alarm display-5 text-primary"></i>
                    <p class="small mt-2">bi-alarm</p>
                </div>
                <div class="col">
                    <i class="bi bi-arrow-up-circle display-5 text-success"></i>
                    <p class="small mt-2">bi-arrow-up-circle</p>
                </div>
                <div class="col">
                    <i class="bi bi-bell display-5 text-warning"></i>
                    <p class="small mt-2">bi-bell</p>
                </div>
                <div class="col">
                    <i class="bi bi-box display-5 text-danger"></i>
                    <p class="small mt-2">bi-box</p>
                </div>
                <div class="col">
                    <i class="bi bi-braces display-5 text-info"></i>
                    <p class="small mt-2">bi-braces</p>
                </div>
                <div class="col">
                    <i class="bi bi-bug display-5 text-body"></i>
                    <p class="small mt-2">bi-bug</p>
                </div>
                <div class="col">
                    <i class="bi bi-camera display-5 text-secondary"></i>
                    <p class="small mt-2">bi-camera</p>
                </div>
                <div class="col">
                    <i class="bi bi-check-circle display-5 text-success"></i>
                    <p class="small mt-2">bi-check-circle</p>
                </div>
                <div class="col">
                    <i class="bi bi-cloud-sun display-5 text-warning"></i>
                    <p class="small mt-2">bi-cloud-sun</p>
                </div>
                <div class="col">
                    <i class="bi bi-cpu display-5 text-danger"></i>
                    <p class="small mt-2">bi-cpu</p>
                </div>
                <div class="col">
                    <i class="bi bi-github display-5 text-body"></i>
                    <p class="small mt-2">bi-github</p>
                </div>
                <div class="col">
                    <i class="bi bi-bootstrap-fill display-5 text-primary"></i>
                    <p class="small mt-2">bi-bootstrap-fill</p>
                </div>
            </div>

            <hr class="my-5">

            <h4 class="mb-3">🧩 Méret, szín, igazítás</h4>
            <div class="d-flex flex-wrap align-items-center gap-4 mb-4">
                <i class="bi bi-heart text-danger fs-1"></i>
                <i class="bi bi-heart text-danger fs-3"></i>
                <i class="bi bi-heart text-danger fs-6"></i>
                <span class="text-muted">Méret: <code>.fs-*</code> osztályokkal</span>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
                <i class="bi bi-arrow-repeat text-primary"></i>
                <i class="bi bi-arrow-repeat text-success"></i>
                <i class="bi bi-arrow-repeat text-danger"></i>
                <span class="text-muted">Szín: <code>.text-*</code> osztályokkal</span>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
                <button class="btn btn-outline-primary">
                    <i class="bi bi-download me-2"></i>Letöltés
                </button>
                <button class="btn btn-success">
                    <i class="bi bi-check-circle me-2"></i>Mentve
                </button>
                <button class="btn btn-danger">
                    <i class="bi bi-trash me-2"></i>Törlés
                </button>
                <span class="text-muted">Ikonok gombokon</span>
            </div>

            <p class="mt-4 small text-muted">
                🔗 Teljes lista: <a href="https://icons.getbootstrap.com/" target="_blank">icons.getbootstrap.com</a>
            </p>
        </div>
    </section>


    <!-- INTERAKTÍV -->
    <section id="interactive" class="bg-body-secondary py-5">
        <div class="container">
            <h2 class="mb-4">⚡ Interaktív példák</h2>
            <div class="row g-4">
                <!-- Collapse -->
                <div class="col-md-4">
                    <h5>Collapse</h5>
                    <button class="btn btn-primary mb-2" data-bs-toggle="collapse" data-bs-target="#collapseExample">Mutasd / Rejtsd</button>
                    <div id="collapseExample" class="collapse">
                        <div class="card card-body">Lenyíló tartalom a Bootstrap <code>collapse</code>-szal.</div>
                    </div>
                </div>

                <!-- Carousel -->
                <div class="col-md-4">
                    <h5>Carousel</h5>
                    <div id="demoCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded shadow-sm">
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/600/250?random=1" class="d-block w-100" alt="1" />
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/600/250?random=2" class="d-block w-100" alt="2" />
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/600/250?random=3" class="d-block w-100" alt="3" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#demoCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demoCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>

                <!-- Tooltip + Progress -->
                <div class="col-md-4">
                    <h5>Tooltip & Progress</h5>
                    <button class="btn btn-secondary mb-3" data-bs-toggle="tooltip" data-bs-title="Ez egy tooltip példa!">Hover rám</button>
                    <div class="progress" role="progressbar" aria-label="Demo progress" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:60%">60%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accordion, Alerts, Badges, Cards -->
    <section id="components" class="py-5">
        <div class="container">
            <h2 class="mb-4">🧩 Komponensek</h2>

            <div class="row g-4">
                <!-- Accordion -->
                <div class="col-lg-6">
                    <h5 class="mb-3">Accordion</h5>
                    <div class="accordion" id="demoAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="acc1h">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc1">
                                    1. Mit tud a Bootstrap accordion?
                                </button>
                            </h2>
                            <div id="acc1" class="accordion-collapse collapse show" data-bs-parent="#demoAccordion" aria-labelledby="acc1h">
                                <div class="accordion-body">
                                    Összecsukható / lenyitható panelcsoport, állapotkezeléssel és animációval.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="acc2h">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc2">
                                    2. Milyen tartalmat tehetek bele?
                                </button>
                            </h2>
                            <div id="acc2" class="accordion-collapse collapse" data-bs-parent="#demoAccordion" aria-labelledby="acc2h">
                                <div class="accordion-body">
                                    Bármilyen HTML: listák, képek, gombok, akár formok is.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alerts -->
                <div class="col-lg-6">
                    <h5 class="mb-3">Alerts</h5>
                    <div class="alert alert-success" role="alert">Siker! A művelet lefutott.</div>
                    <div class="alert alert-warning" role="alert">Figyelem! Ellenőrizd az adatokat.</div>
                    <div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert">
                        <span>Hiba! Valami félrement.</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Bezárás"></button>
                    </div>
                    <div class="alert alert-info" role="alert">
                        Tipp: használhatsz <a href="#" class="alert-link">alert-link</a> stílust is.
                    </div>
                </div>

                <!-- Badges -->
                <div class="col-lg-6">
                    <h5 class="mb-3">Badges</h5>
                    <p class="mb-2">
                        <span class="badge text-bg-primary">Primary</span>
                        <span class="badge text-bg-secondary">Secondary</span>
                        <span class="badge text-bg-success">Success</span>
                        <span class="badge text-bg-danger">Danger</span>
                        <span class="badge text-bg-warning text-body">Warning</span>
                        <span class="badge text-bg-info text-body">Info</span>
                        <span class="badge text-bg-body-secondary text-body">Light</span>
                        <span class="badge text-bg-dark">Dark</span>
                    </p>
                    <button class="btn btn-outline-primary me-2">
                        Értesítések <span class="badge text-bg-danger">3</span>
                    </button>
                    <h6 class="mt-3">
                        Fejléc badge <span class="badge text-bg-success align-middle">ÚJ</span>
                    </h6>
                </div>

                <!-- Cards -->
                <div class="col-lg-6">
                    <h5 class="mb-3">Cards</h5>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="card h-100 shadow-sm">
                                <img src="https://picsum.photos/600/360?random=11" class="card-img-top" alt="card1" />
                                <div class="card-body">
                                    <h5 class="card-title">Kártya cím</h5>
                                    <p class="card-text">Rövid leírás a kártyához. Tökéletes listákhoz, blogkártyákhoz.</p>
                                    <a href="#" class="btn btn-primary">Részletek</a>
                                </div>
                                <div class="card-footer text-muted">Frissítve: ma</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card h-100 border-0 shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Egyszerű kártya</h5>
                                    <p class="card-text">Kép nélkül is működik. Tetszés szerint bővíthető listákkal, gombokkal.</p>
                                    <button class="btn btn-outline-secondary">Akció</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /row -->
        </div>
    </section>

    <!-- THEME SETTINGS DRAWER -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="settingsDrawer" aria-labelledby="settingsDrawerLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="settingsDrawerLabel">Theme Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <h6 class="mb-2">Mode</h6>
            <div class="d-flex gap-2 mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" data-theme-mode="light">
                    <i class="bi bi-brightness-high me-1"></i> Light
                </button>
                <button type="button" class="btn btn-sm btn-outline-primary" data-theme-mode="dark">
                    <i class="bi bi-moon-stars me-1"></i> Dark
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary" data-theme-mode="auto">
                    <i class="bi bi-circle-half me-1"></i> Auto
                </button>
            </div>

            <h6 class="mb-2">Primary color</h6>
            <div class="row row-cols-5 g-2" id="colorSwatches">
                {{-- szín swatchok (adatok: --bs-primary hez) --}}
                @php
                    $swatches = [
                      ['name'=>'blue',   'hex'=>'#0d6efd'],
                      ['name'=>'indigo', 'hex'=>'#6610f2'],
                      ['name'=>'purple', 'hex'=>'#6f42c1'],
                      ['name'=>'pink',   'hex'=>'#d63384'],
                      ['name'=>'red',    'hex'=>'#dc3545'],
                      ['name'=>'orange', 'hex'=>'#fd7e14'],
                      ['name'=>'yellow', 'hex'=>'#ffc107'],
                      ['name'=>'green',  'hex'=>'#198754'],
                      ['name'=>'teal',   'hex'=>'#20c997'],
                      ['name'=>'cyan',   'hex'=>'#0dcaf0'],
                    ];
                @endphp
                @foreach($swatches as $s)
                    <div class="col">
                        <button type="button"
                                class="w-100 ratio ratio-1x1 border-0 rounded"
                                title="{{ $s['name'] }}"
                                data-color="{{ $s['hex'] }}"
                                style="background: {{ $s['hex'] }};">
                        </button>
                    </div>
                @endforeach
            </div>

            <hr class="my-4">

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="useGradient">
                <label class="form-check-label" for="useGradient">Gradient a hero szekcióban</label>
            </div>
            <p class="text-muted small mt-2">A választott beállításokat elmentjük, és újratöltés után is megmaradnak.</p>
        </div>
    </div>


    <!-- LARAVEL SANCTUM – API TOKEN DEMÓ -->
    <section id="sanctum" class="py-5">
        <div class="container">
            <h2 class="mb-4">🔐 Laravel Sanctum – API token használat (példa)</h2>

            <div class="alert alert-info" role="alert">
                <strong>Előfeltételek:</strong> <code>composer require laravel/sanctum</code> →
                <code>php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"</code> →
                <code>php artisan migrate</code>. Az <code>api</code> middleware-csoportban legyen az <code>EnsureFrontendRequestsAreStateful</code> is, ha SPA auth-ot használsz.
            </div>

            <ul class="nav nav-tabs" id="sanctumTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="routes-tab" data-bs-toggle="tab" data-bs-target="#routes" type="button" role="tab">routes/api.php</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="controller-tab" data-bs-toggle="tab" data-bs-target="#controller" type="button" role="tab">Auth példa (Controller)</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="request-tab" data-bs-toggle="tab" data-bs-target="#request" type="button" role="tab">Kérés minta (Postman/cURL)</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="middleware-tab" data-bs-toggle="tab" data-bs-target="#middleware" type="button" role="tab">Middleware megjegyzés</button>
                </li>
            </ul>

            <div class="tab-content border border-top-0 p-3 rounded-bottom shadow-sm" id="sanctumTabsContent">
                <!-- ROUTES -->
                <div class="tab-pane fade show active" id="routes" role="tabpanel" aria-labelledby="routes-tab">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-secondary btn-sm mb-2 copy-btn" data-copy-target="#code-routes">Copy</button>
                    </div>
                    <pre id="code-routes" class="mb-0"><code class="language-php">
// routes/api.php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [\App\Http\Controllers\AuthTokenController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/logout', [\App\Http\Controllers\AuthTokenController::class, 'logout']);
});
</code></pre>
                </div>

                <!-- CONTROLLER -->
                <div class="tab-pane fade" id="controller" role="tabpanel" aria-labelledby="controller-tab">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-secondary btn-sm mb-2 copy-btn" data-copy-target="#code-controller">Copy</button>
                    </div>
                    <pre id="code-controller" class="mb-0"><code class="language-php">
// app/Http/Controllers/AuthTokenController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthTokenController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required','email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($credentials)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $user  = $request->user();
        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function logout(Request $request)
    {
        // aktuális token visszavonása
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out']);
    }
}
</code></pre>
                </div>

                <!-- REQUEST EXAMPLES -->
                <div class="tab-pane fade" id="request" role="tabpanel" aria-labelledby="request-tab">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-outline-secondary btn-sm mb-2 copy-btn" data-copy-target="#code-curl-login">Copy</button>
                            </div>
                            <pre id="code-curl-login" class="mb-0"><code class="language-bash">
# LOGIN → token visszaadása
curl -X POST http://localhost:8000/api/login \
  -H "Content-Type: application/json" \
  -d '{"email":"user@example.com","password":"secret"}'
</code></pre>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-outline-secondary btn-sm mb-2 copy-btn" data-copy-target="#code-curl-user">Copy</button>
                            </div>
                            <pre id="code-curl-user" class="mb-0"><code class="language-bash">
# VÉDETT ENDPOINT → Bearer tokennel
curl http://localhost:8000/api/user \
  -H "Authorization: Bearer &lt;TOKEN&gt;"
</code></pre>
                        </div>
                    </div>
                </div>

                <!-- MIDDLEWARE NOTE -->
                <div class="tab-pane fade" id="middleware" role="tabpanel" aria-labelledby="middleware-tab">
                    <div class="alert alert-secondary">
                        <strong>Megjegyzés:</strong> A <code>Route::middleware('auth:sanctum')</code> védi a route-okat.
                        Tokenes módnál az <code>Authorization: Bearer &lt;token&gt;</code> fejléc szükséges.
                        SPA cookie-s módnál állítsd be a <code>config/sanctum.php</code> <code>stateful</code> domainjeit (pl. <code>app.example.com, api.example.com</code>).
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">🧠 Összefoglalás – mit csinál a Sanctum?</h4>
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Két mód</h5>
                            <ul class="mb-0">
                                <li><strong>Cookie-alapú SPA auth</strong> – session cookie-val azonosítja a felhasználót ugyanazon (al)domain alatt.</li>
                                <li><strong>Token-alapú API auth</strong> – <code>Bearer</code> token fejléccel hitelesít külső/mobil klienseknél.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Hogyan tárol?</h5>
                            <ul class="mb-0">
                                <li>Tokenek: <code>personal_access_tokens</code> táblában, <strong>hash-elve</strong>.</li>
                                <li>Egyszerű <code>auth:sanctum</code> middleware-védelem route-okra.</li>
                                <li>Gyors és könnyű alternatíva az OAuth2-t igénylő Passporttal szemben.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- SANCTUM HEALTH-CHECK + MINI AUTH UI -->
    <section id="sanctum-check" class="py-5 bg-body-secondary">
        <div class="container">
            <h2 class="mb-4">🩺 Laravel Sanctum – Health-Check és mini Auth UI</h2>

            <div class="row g-4">
                <!-- HEALTH CHECK -->
                <div class="col-lg-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Sanctum státusz</h5>
                            <p class="mb-1">Laravel verzió: <strong>{{ app()->version() }}</strong></p>
                            <p class="mb-1">PHP verzió: <strong>{{ PHP_VERSION }}</strong></p>
                            <p class="mb-1">Sanctum telepítve:
                                <strong class="{{ class_exists('Laravel\\Sanctum\\Sanctum') ? 'text-success' : 'text-danger' }}">
                                    {{ class_exists('Laravel\\Sanctum\\Sanctum') ? 'igen ✅' : 'nem ❌' }}
                                </strong>
                            </p>
                            @php
                                $stateful = config('sanctum.stateful') ?? [];
                                $hasTokens = \Illuminate\Support\Facades\Schema::hasTable('personal_access_tokens');
                            @endphp
                            <p class="mb-1">Token tábla:
                                <strong class="{{ $hasTokens ? 'text-success' : 'text-danger' }}">
                                    {{ $hasTokens ? 'rendben ✅' : 'hiányzik ❌' }}
                                </strong>
                            </p>
                            <p class="mb-0">Stateful domainek:
                                <code>{{ implode(', ', (array) $stateful) ?: '— nincs beállítva —' }}</code>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- MINI AUTH UI -->
                <div class="col-lg-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">🔐 Token alapú bejelentkezés (demo)</h5>
                            <form id="sanctumLoginForm" class="mb-3">
                                <div class="mb-3">
                                    <label for="loginEmail" class="form-label">Email</label>
                                    <input type="email" id="loginEmail" class="form-control" placeholder="user@example.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="loginPassword" class="form-label">Jelszó</label>
                                    <input type="password" id="loginPassword" class="form-control" placeholder="••••••" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Bejelentkezés</button>
                            </form>

                            <div id="tokenBox" class="d-none">
                                <p class="small mb-2 text-muted">Token:</p>
                                <div class="input-group mb-3">
                                    <input type="text" id="apiToken" class="form-control form-control-sm" readonly>
                                    <button class="btn btn-outline-secondary btn-sm" id="copyToken">Copy</button>
                                </div>
                                <button id="checkUser" class="btn btn-success w-100 mb-2">/api/user lekérdezése</button>
                                <button id="logoutBtn" class="btn btn-outline-danger w-100">Kijelentkezés</button>
                            </div>

                            <pre id="apiResponse" class="mt-3 p-2 bg-dark text-white small rounded" style="display:none; max-height:150px; overflow:auto;"></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EMAIL -->
    <section id="mail" class="py-5 bg-body">
        <div class="container">
            <h2 class="mb-4">✉️ Laravel Mail – gyors útmutató</h2>

            <div class="alert alert-info">
                A Laravel e-mail küldést <code>Mail</code> facáddal és <code>Mailable</code> osztályokkal végzi.
                Fejlesztéshez ajánlott: <strong>Mailtrap</strong> vagy <strong>HELO</strong>.
            </div>

            {{-- Tabs --}}
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#mail-env" type="button">.env</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#mail-mailable" type="button">Mailable</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#mail-view" type="button">Markdown view</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#mail-route" type="button">Route/Controller</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#mail-curl" type="button">Tesztelés</button></li>
            </ul>

            <div class="tab-content border border-top-0 p-3 rounded-bottom shadow-sm">
                {{-- .env --}}
                <div class="tab-pane fade show active" id="mail-env">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-secondary btn-sm copy-btn" data-copy-target="#code-mail-env">Copy</button>
                    </div>
                    <pre id="code-mail-env"><code># .env (példa Mailtrap smtp-hez)
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=587
MAIL_USERNAME=YOUR_USER
MAIL_PASSWORD=YOUR_PASS
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@example.com
MAIL_FROM_NAME="Demo App"
</code></pre>
                </div>

                {{-- Mailable --}}
                <div class="tab-pane fade" id="mail-mailable">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-secondary btn-sm copy-btn" data-copy-target="#code-mail-mailable">Copy</button>
                    </div>
                    <pre id="code-mail-mailable"><code class="language-php">
// Terminál:
php artisan make:mail DemoMail --markdown=emails.demo

// app/Mail/DemoMail.php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public string $name, public string $messageText) {}

    public function build()
    {
        return $this->subject('Üdv a Demo App-ban')
                    ->markdown('emails.demo', [
                        'name' => $this->name,
                        'messageText' => $this->messageText,
                    ]);
    }
}
</code></pre>
                </div>

                {{-- View --}}
                <div class="tab-pane fade" id="mail-view">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-secondary btn-sm copy-btn" data-copy-target="#code-mail-view">Copy</button>
                    </div>
                    <pre id="code-mail-view"><code class="language-php">
{{-- resources/views/emails/demo.blade.php --}}
{{--                            @component('mail::message')--}}
{{--                                # Szia, {{$name}}!--}}

{{--                                {{$messageText}}--}}

{{--                                @component('mail::button', ['url' => config('app.url')])--}}
{{--                                    Ugorj az oldalra--}}
{{--                                @endcomponent--}}

{{--                                Üdv,<br>--}}
{{--                                {{ config('app.name') }}--}}
{{--                            @endcomponent--}}
</code></pre>
                </div>

                {{-- Route + Controller/Closure --}}
                <div class="tab-pane fade" id="mail-route">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-secondary btn-sm copy-btn" data-copy-target="#code-mail-route">Copy</button>
                    </div>
                    <pre id="code-mail-route"><code class="language-php">
// routes/web.php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

Route::post('/mail-test', function (Request $req) {
    $validated = $req->validate([
        'email' => ['required','email'],
        'name' => ['required','string'],
        'message' => ['required','string'],
    ]);

    Mail::to($validated['email'])->send(
        new DemoMail(name: $validated['name'], messageText: $validated['message'])
    );

    return back()->with('status','Mail elküldve!');
})->name('mail.test');

// (Opcionális) Előnézet böngészőben:
Route::get('/mail-preview', function () {
    return new DemoMail(name: 'István', messageText: 'Ez egy előnézeti üzenet.');
});
</code></pre>
                </div>

                {{-- Tesztelés --}}
                <div class="tab-pane fade" id="mail-curl">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-secondary btn-sm copy-btn" data-copy-target="#code-mail-curl">Copy</button>
                    </div>
                    <pre id="code-mail-curl"><code class="language-bash">
# cURL példa (ha a form még nincs kész):
curl -X POST http://localhost:8000/mail-test \
  -H "Content-Type: application/x-www-form-urlencoded" \
  --data "email=you@example.com&name=Istvan&message=Szia%2C%20ez%20egy%20teszt!"

# vagy böngésző:
http://localhost:8000/mail-preview
</code></pre>
                </div>
            </div>

            {{-- Opcionális mini űrlap a demóoldalon --}}
            <hr class="my-4">
            <h5 class="mb-3">Gyors tesztküldés (action="route('mail.test')")</h5>
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <form class="row g-3" action="" method="POST">
                @csrf
                <div class="col-md-4">
                    <label class="form-label">Címzett email</label>
                    <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Név</label>
                    <input type="text" name="name" class="form-control" placeholder="István" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Üzenet</label>
                    <input type="text" name="message" class="form-control" placeholder="Rövid tesztüzenet" required>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary">
                        <i class="bi bi-send me-2"></i>Küldés
                    </button>
                </div>
            </form>
        </div>
    </section>


    <!-- OFFCANVAS -->
    <section id="offcanvas" class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">📱 Offcanvas</h2>
            <button class="btn btn-outline-primary" data-bs-toggle="offcanvas" data-bs-target="#demoOffcanvas">Oldalsáv megnyitása</button>
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="demoOffcanvas">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Offcanvas Menü</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <p>Ez egy elrejthető/megnyitható oldalsáv.</p>
                <button class="btn btn-success w-100" data-bs-dismiss="offcanvas">Bezárás</button>
            </div>
        </div>
    </section>

    <!-- SPINNER + TOAST -->
    <section id="toast" class="bg-body-secondary py-5 text-center">
        <div class="container">
            <h2 class="mb-4">🔔 Spinner & Toast</h2>
            <div class="mb-3">
                <div class="spinner-border text-primary" role="status"></div>
                <div class="spinner-grow text-success ms-2" role="status"></div>
            </div>

            <button class="btn btn-primary" id="showToastBtn">Mutasd a toastot</button>

            <div class="toast position-fixed bottom-0 end-0 m-3" id="myToast" role="alert" data-bs-delay="3000">
                <div class="toast-header">
                    <strong class="me-auto">Értesítés</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                </div>
                <div class="toast-body">
                    Ez egy Bootstrap toast példa!
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL -->
    <div class="modal fade" id="demoModal" tabindex="-1" aria-labelledby="demoModalLabel">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="demoModalLabel">Laravel verzió: {{ app()->version() }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-sm table-striped">
                        <thead>
                        <tr>
                            <th>Composer Package</th>
                            <th>Verzió</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($packages as $pkg)
                            <tr>
                                <td>{{ $pkg['name'] }}</td>
                                <td>{{ $pkg['version'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Bezárás</button>
                    <button class="btn btn-primary">Mentés</button>
                </div>
            </div>
        </div>
    </div>

    <!-- SCROLL TO TOP BUTTON -->
    <button type="button" id="scrollTopBtn" class="btn btn-warning btn-lg rounded-circle shadow position-fixed"
            style="bottom: 20px; right: 20px; width: 56px; height: 56px; display: none; z-index: 1050;">
        <i class="bi bi-arrow-up"></i>
    </button>

    <!-- SETTINGS BUTTON (lebegő) -->
    <button class="btn btn-outline-secondary position-fixed start-0 bottom-0 m-3 rounded-circle shadow"
            type="button" data-bs-toggle="offcanvas" data-bs-target="#settingsDrawer"
            style="width:56px;height:56px;z-index:1100;">
        <i class="bi bi-gear-fill fs-4"></i>
    </button>


    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">Laravel {{ app()->version() }} + Bootsrap 5 + Vite starter (Sass use-ready).</p>
    </footer>
@endsection
@section('scripts')
    <script>
        // Egyszerű "Copy" gomb logika
        document.querySelectorAll('.copy-btn').forEach(btn => {
            btn.addEventListener('click', async () => {
                const target = document.querySelector(btn.getAttribute('data-copy-target'));
                if (!target) return;
                const code = target.innerText;
                try {
                    await navigator.clipboard.writeText(code);
                    btn.textContent = 'Copied!';
                    setTimeout(() => btn.textContent = 'Copy', 1200);
                } catch (e) {
                    alert('Copy failed');
                }
            });
        });

        // megjelenítés görgetés közben
        const scrollBtn = document.getElementById('scrollTopBtn');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                scrollBtn.style.display = 'block';
            } else {
                scrollBtn.style.display = 'none';
            }
        });

        // visszagörgetés a tetejére
        scrollBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
    <!-- Sanctum script --->
    <script>
        (() => {
            const form = document.getElementById('sanctumLoginForm');
            const tokenBox = document.getElementById('tokenBox');
            const tokenInput = document.getElementById('apiToken');
            const apiResponse = document.getElementById('apiResponse');

            const apiBase = '/api'; // módosítsd, ha más prefixet használsz

            form.addEventListener('submit', async e => {
                e.preventDefault();
                const email = document.getElementById('loginEmail').value;
                const password = document.getElementById('loginPassword').value;

                const res = await fetch(`${apiBase}/login`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ email, password })
                });

                const data = await res.json();
                if (res.ok && data.token) {
                    tokenInput.value = data.token;
                    tokenBox.classList.remove('d-none');
                    form.classList.add('d-none');
                } else {
                    alert(data.message || 'Sikertelen bejelentkezés.');
                }
            });

            document.getElementById('copyToken').addEventListener('click', async () => {
                await navigator.clipboard.writeText(tokenInput.value);
                alert('Token másolva a vágólapra');
            });

            document.getElementById('checkUser').addEventListener('click', async () => {
                const res = await fetch(`${apiBase}/user`, {
                    headers: { 'Authorization': `Bearer ${tokenInput.value}` }
                });
                const data = await res.json();
                apiResponse.style.display = 'block';
                apiResponse.textContent = JSON.stringify(data, null, 2);
            });

            document.getElementById('logoutBtn').addEventListener('click', async () => {
                await fetch(`${apiBase}/logout`, {
                    method: 'POST',
                    headers: { 'Authorization': `Bearer ${tokenInput.value}` }
                });
                form.classList.remove('d-none');
                tokenBox.classList.add('d-none');
                apiResponse.style.display = 'none';
                alert('Kijelentkezve');
            });
        })();
    </script>

    <!-- Validation --->
    <script>
        (() => {
            const form = document.getElementById('demoForm');
            if (!form) return;

            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);

            // opcionális: kis "username foglaltság" demo (csak UI)
            const btn = document.getElementById('checkUsername');
            const input = document.getElementById('username');
            btn?.addEventListener('click', () => {
                if (!input.value) {
                    input.classList.add('is-invalid');
                    return;
                }
                input.classList.remove('is-invalid');
                input.classList.add('is-valid');
                setTimeout(() => input.classList.remove('is-valid'), 1200);
            });
        })();
    </script>
@endsection
