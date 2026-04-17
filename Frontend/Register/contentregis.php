            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="username" placeholder="Username" required>
                                                <label>Username</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="email" name="email" placeholder="Email" required>
                                                <label>Email address</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                                                <label>Password</label>
                                            </div>

                                            <div class="d-grid">
                                                <button type="submit" name="register" class="btn btn-primary">
                                                    Create Account
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="/WSI/Frontend/Login/Login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>