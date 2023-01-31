<div class="modal fade log-reg" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="post-tabs">
              <!-- tab navs -->
              <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                  <li class="nav-item" role="presentation">
                      <button aria-controls="login" aria-selected="false" class="nav-link active" data-bs-target="#login" data-bs-toggle="tab" id="login-tab" role="tab" type="button">Login</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button aria-controls="register" aria-selected="true" class="nav-link" data-bs-target="#register" data-bs-toggle="tab" id="register-tab" role="tab" type="button">Register</button>
                  </li>
              </ul>
              <!-- tab contents -->
              <div class="tab-content blog-full" id="postsTabContent">
                  <!-- popular posts -->
                  <div aria-labelledby="login-tab" class="tab-pane fade active show" id="login" role="tabpanel">
                    <x-auth.login/>
                  </div>
                  <!-- Recent posts -->
                  <div aria-labelledby="register-tab" class="tab-pane fade" id="register" role="tabpanel">
                    <x-auth.register/>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
