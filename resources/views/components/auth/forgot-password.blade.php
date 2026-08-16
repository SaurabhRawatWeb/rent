<div
    class="modal fade"
    id="forgotPasswordModal"
    tabindex="-1"
    aria-labelledby="forgotPasswordModalLabel"
    aria-hidden="true"
>

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 rounded-4 shadow-lg">

            <div class="modal-header border-0 p-4 pb-2">

                <div class="w-100">

                    <div class="d-flex justify-content-between align-items-start">

                        <div
                            class="bg-dark-blue-subtle text-dark-blue rounded-4 d-flex align-items-center justify-content-center mb-3 modal-icon"
                        >
                            <span class="fs-3">🔑</span>
                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>

                    </div>

                    <div
                        class="d-flex align-items-center gap-2 text-dark-blue fw-bold text-uppercase mb-2"
                        style="font-size:10px;letter-spacing:1.5px;"
                    >
                        <span>━</span>
                        Secure Account Recovery
                    </div>

                    <h5
                        class="modal-title fs-3 fw-bold text-dark"
                        id="forgotPasswordModalLabel"
                    >
                        Reset your password
                    </h5>

                </div>

            </div>

            <div class="modal-body px-4 pb-4">

                <p
                    class="text-secondary mb-4"
                    style="font-size:13px;line-height:1.7;"
                >
                    Enter the email linked to your workspace. We'll send a secure,
                    time-limited reset link if the account exists.
                </p>

                <form action="#" method="POST">

                    @csrf

                    <div class="mb-4">

                        <label
                            for="forgot_email"
                            class="form-label text-secondary fw-semibold mb-1"
                            style="font-size:12px;"
                        >
                            Work email address
                        </label>

                        <div class="input-group">

                            <span class="input-group-text bg-dark-blue-subtle border-end-0 text-secondary">
                                ✉
                            </span>

                            <input
                                type="email"
                                id="forgot_email"
                                name="email"
                                class="form-control bg-dark-blue-subtle border-start-0 py-2"
                                placeholder="name@company.com"
                                required
                            >

                        </div>

                    </div>

                    <div class="d-grid mb-3">

                        <button
                            type="submit"
                            class="btn btn-dark-blue fw-semibold rounded-2"
                        >
                            Send Reset Link
                        </button>

                    </div>

                    <div class="text-center mb-4">

                        <span
                            class="text-secondary"
                            style="font-size:11px;"
                        >
                            🛡 &nbsp; Your account details remain private and protected
                        </span>

                    </div>

                    <div class="text-center">

                        <button
                            type="button"
                            class="btn btn-link text-secondary text-decoration-none fw-semibold p-0"
                            data-bs-dismiss="modal"
                            style="font-size:12px;"
                        >
                            ← &nbsp; Back to sign in
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>