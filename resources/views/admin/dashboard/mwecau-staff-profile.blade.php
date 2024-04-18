<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MWECAU | Dashboard</title>
    <link rel="stylesheet" href="./dashboard.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
  </head>
  <body>
    <section class="main-section">
      <div class="sidebar">
        <div class="nav-toggle hide-nav">
          <i class="fa fa-times"></i>
        </div>
        <div class="side-logo">
          <img src="./MWECAU logo.png" alt="mwecau logo" />
          <span>MWECAU</span>
          <p><i>"Lux Mundi" - </i>Light of the world</p>
        </div>
        <ul class="nav-list">
          <a href="dashboard.html">
            <li class="nav-item">
              <i class="fa fa-home nav-icons"></i>
              <span class="nav-words">Home</span>
            </li>
          </a>
          <a href="dashboard-programs.html">
            <li class="nav-item">
              <i class="fa fa-university nav-icons"></i>
              <span class="nav-words">Programmes</span>
            </li>
          </a>
          <a href="dashboard-staff.html">
            <li class="nav-item">
              <i class="fa fa-users nav-icons"></i>
              <span class="nav-words">Staff</span>
            </li>
          </a>
          <a href="dashboard-events.html">
            <li class="nav-item">
              <i class="fa fa-calendar nav-icons"></i>
              <span class="nav-words">Events</span>
            </li>
          </a>
          <a href="">
            <li class="nav-item">
              <i class="fa fa-key nav-icons"></i>
              <span class="nav-words">Change Password</span>
            </li>
          </a>
          <a href="">
            <li class="nav-item">
              <i class="fa fa-sign-out-alt nav-icons"></i>
              <span class="nav-words">Logout</span>
            </li>
          </a>
        </ul>
      </div>
      <div class="main-content">
        <div class="header">
          <div class="nav-toggle show-nav">
          <i class="fa fa-bars"></i>
        </div>
          <h2>MWENGE CATHOLIC UNIVERSITY | DASHBOARD</h2>
        </div>
        <div class="stats-box">
          <h3 class="title">Staff Profile</h3>
        </div>

        <div class="content-box">
          <div class="profile">
            <div class="short-profile">
              <img src="MWECAU logo.png" alt="">
                <span>Prof. Jane Doe</span>
                <span>Associate Professor</span>              
            </div>
            <div class="long-profile">
              <div class="biodata">
                <h5>Personal Biodata</h5>
                <table class="bio-tb">
                  <tr>
                    <th>Name: </th>
                    <td>Jane Doe</td>
                  </tr>
                  <tr>
                    <th>Gender: </th>
                    <td>Female</td>
                  </tr>
                  <tr>
                    <th>Nationality: </th>
                    <td>Tanzanian</td>
                  </tr>
                  <tr>
                    <th>Language: </th>
                    <td>English, Swahili</td>
                  </tr>
                </table>
              </div>
              <div class="other-contacts">
              <div class="personal-contacts">
                <h5>Personal Contacts</h5>
                <div class="p-contact">
                  <i class=" fa fa-envelope"></i>
                  <span>janedoe@gmail.com</span>
                </div>
                <div class="p-contact">
                  <i class=" fa fa-phone"></i>
                  <span>+255 123456789</span>
                </div>
              </div>
               <div class="office-contacts">
                <h5>Office Contacts</h5>
                <div class="o-contact">
                  <i class=" fa fa-envelope"></i>
                  <span>janedoe@mwecau.ac.tz</span>
                </div>
                <div class="p-contact">
                  <i class=" fa fa-phone"></i>
                  <span>+255 123456789</span>
                </div>
              </div>
              </div>
            </div>
          </div>

          <div class="about-box">
            <div class="about">
              <span>About Jane</span>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id amet, aliquid dicta, qui deleniti animi iusto pariatur molestiae ratione obcaecati nobis, earum at in autem accusantium possimus deserunt nemo! Sint?
              Repellat consectetur exercitationem sint tempora, consequuntur odio! Quas rerum exercitationem a ex tempora doloremque expedita consectetur, porro architecto! Perspiciatis reiciendis voluptatem, eius quia error sequi odio optio exercitationem consequuntur voluptate!
              Amet a ipsum ducimus odit voluptatem nihil quae dolorum veniam quisquam corrupti sint sit, libero in nemo facere. Assumenda, velit? Consectetur, dolorum sed voluptate porro facere nesciunt fuga a nihil.</p>
            </div>
            <div class="qualification">
              <div class="category q-category">
            <button class="btn-ac-qual">
              <i class="fa fa-university icon"></i> Academic Qualifications
            </button>
            <button class="btn-pro-qual">
              <i class="fa fa-user icon"></i> Professional Qualifications
            </button>
          </div>
          <div class="category-content ac-qual-table">
            <table class="content-table q-table">
              <thead>
                <tr>
                  <th style="width: 5%">S/N</th>
                  <th style="width: 30%">Study Level</th>
                  <th style="width: 20%">Qualification Name</th>
                  <th style="width: 30%">Institution</th>
                  <th style="width: 15%">Year</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Masters</td>
                  <td>Msc</td>
                  <td>mwecau</td>
                  <td>2015 - 2017</td>
                </tr>
                 <tr>
                  <td>2</td>
                  <td>Masters</td>
                  <td>Msc</td>
                  <td>mwecau</td>
                  <td>2015 - 2017</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Masters</td>
                  <td>Msc</td>
                  <td>mwecau</td>
                  <td>2015 - 2017</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="category-content prof-qual-table">
            <table class="content-table q-table">
              <thead>
                <tr>
                  <th style="width: 5%">S/N</th>
                  <th style="width: 30%">Pro Study Level</th>
                  <th style="width: 20%">Qualification Name</th>
                  <th style="width: 30%">Institution</th>
                  <th style="width: 15%">Year</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Masters</td>
                  <td>Msc</td>
                  <td>mwecau</td>
                  <td>2015 - 2017</td>
                </tr>
                 <tr>
                  <td>2</td>
                  <td>Masters</td>
                  <td>Msc</td>
                  <td>mwecau</td>
                  <td>2015 - 2017</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Masters</td>
                  <td>Msc</td>
                  <td>mwecau</td>
                  <td>2015 - 2017</td>
                </tr>
              </tbody>
            </table>
          </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="./dashboard-profile.js"></script>
    <script src="./sidebar.js"></script>
  </body>
</html>
