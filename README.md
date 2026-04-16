<div align="center" style="font-family: 'Segoe UI', system-ui, sans-serif; background: linear-gradient(135deg,#0f172a,#020617); padding:40px; border-radius:20px;">

  <!-- HERO -->
  <div style="
    max-width:1000px;
    margin:auto;
    padding:60px 30px;
    border-radius:20px;
    background:rgba(255,255,255,0.05);
    backdrop-filter: blur(12px);
    border:1px solid rgba(255,255,255,0.1);
    box-shadow:0 30px 60px rgba(0,0,0,0.5);
    color:white;
  ">
    
    <div style="font-size:65px;">🎓</div>

    <h1 style="font-size:48px; font-weight:800; margin:10px 0;">
      Scholarship Management
      <span style="color:#38bdf8;">Portal</span>
    </h1>

    <p style="color:#94a3b8; font-size:18px;">
      A secure and scalable RESTful API system for managing scholarships, applicants, and educational grants.
    </p>

    <!-- BADGES -->
    <div style="margin-top:25px; display:flex; justify-content:center; gap:10px; flex-wrap:wrap;">
      <span style="background:#2563eb; padding:6px 14px; border-radius:999px;">v1.0.0</span>
      <span style="background:#16a34a; padding:6px 14px; border-radius:999px;">BUILD PASSING</span>
      <span style="background:#7c3aed; padding:6px 14px; border-radius:999px;">UPDATED</span>
    </div>

    <!-- BUTTONS -->
    <div style="margin-top:30px;">
      <a href="https://github.com/johnmikoechano11/Echano_Laravel1-IPT209.git" style="
        text-decoration:none;
        background:#38bdf8;
        color:#0f172a;
        padding:12px 24px;
        border-radius:10px;
        font-weight:700;
        margin-right:10px;
      ">View Code</a>

      <a href="https://www.postman.com/workspace/john-miko-echano's-Workspace~8779546a-e909-48b7-8f15-85f340af4d40/collection/54061891-c3e8e5d4-9ffe-4beb-915b-7a1696955f14?action=share&source=copy-link&creator=54061891" style="
        text-decoration:none;
        background:#f97316;
        color:white;
        padding:12px 24px;
        border-radius:10px;
        font-weight:700;
      ">API Docs</a>
    </div>

  </div>

  <!-- SUMMARY -->
  <div style="
    max-width:1000px;
    margin:30px auto;
    padding:30px;
    border-radius:16px;
    background:rgba(255,255,255,0.04);
    border:1px solid rgba(255,255,255,0.08);
    color:white;
  ">
    <h2 style="text-align:left;">📊 System Overview</h2>

    <table width="100%" cellpadding="12" style="border-collapse: collapse; margin-top:10px;">
      <tr style="background:#1e293b;">
        <th align="left">Attribute</th>
        <th align="left">Details</th>
      </tr>
      <tr><td><b>System</b></td><td>Scholarship Management System</td></tr>
      <tr><td><b>Lead Developer</b></td><td>John Miko Echano</td></tr>
      <tr><td><b>Tech Stack</b></td><td>Laravel · PHP · MySQL · Postman</td></tr>
    </table>
  </div>

  <!-- FEATURES -->
  <div style="max-width:1000px; margin:auto;">
    <h2 style="text-align:left; color:white;">⚙️ Core Modules</h2>

    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px; margin-top:15px;">

      <div style="background:#1e293b; padding:20px; border-radius:12px;">
        <h3>🔐 Authentication</h3>
        <p style="color:#94a3b8;">Secure login, registration, and token-based authentication.</p>
      </div>

      <div style="background:#1e293b; padding:20px; border-radius:12px;">
        <h3>👥 User Management</h3>
        <p style="color:#94a3b8;">Manage system users, roles, and access permissions.</p>
      </div>

      <div style="background:#1e293b; padding:20px; border-radius:12px;">
        <h3>🎓 Scholarships</h3>
        <p style="color:#94a3b8;">Create, update, and manage scholarship programs.</p>
      </div>

      <div style="background:#1e293b; padding:20px; border-radius:12px;">
        <h3>📄 Applicants</h3>
        <p style="color:#94a3b8;">Track student applications and eligibility status.</p>
      </div>

    </div>
  </div>

  <!-- FEATURES TABLE -->
  <div style="
    max-width:1000px;
    margin:30px auto;
    padding:30px;
    border-radius:16px;
    background:rgba(255,255,255,0.04);
    border:1px solid rgba(255,255,255,0.08);
    color:white;
  ">
    <h2 style="text-align:left;">📋 Feature Status</h2>

    <table width="100%" cellpadding="10" style="border-collapse: collapse;">
      <tr style="background:#1e293b;">
        <th>Module</th>
        <th>Feature</th>
        <th>Method</th>
        <th>Status</th>
      </tr>
      <tr><td>Auth</td><td>Register/Login</td><td>POST</td><td>✅</td></tr>
      <tr><td>Users</td><td>CRUD Operations</td><td>GET/POST/PUT</td><td>✅</td></tr>
      <tr><td>Scholarships</td><td>Manage Programs</td><td>POST/PUT</td><td>✅</td></tr>
      <tr><td>Applicants</td><td>Applications</td><td>POST/PATCH</td><td>✅</td></tr>
      <tr><td>Reports</td><td>Analytics</td><td>GET</td><td>🚧</td></tr>
    </table>
  </div>

  <!-- API -->
  <div style="
    max-width:1000px;
    margin:auto;
    padding:30px;
    border-radius:16px;
    background:rgba(255,255,255,0.04);
    border:1px solid rgba(255,255,255,0.08);
    color:white;
  ">
    <h2 style="text-align:left;">🔗 API Endpoints</h2>

    <p style="text-align:left;"><b>Public</b></p>
    <ul style="text-align:left; color:#94a3b8;">
      <li><code>POST /api/register</code></li>
      <li><code>POST /api/login</code></li>
    </ul>

    <p style="text-align:left;"><b>Protected</b></p>
    <ul style="text-align:left; color:#94a3b8;">
      <li><code>GET /api/users</code></li>
      <li><code>POST /api/users</code></li>
      <li><code>PUT /api/users/{id}</code></li>
      <li><code>DELETE /api/users/{id}</code></li>
      <li><code>GET /api/scholarships</code></li>
      <li><code>POST /api/scholarships</code></li>
      <li><code>GET /api/applicants</code></li>
      <li><code>POST /api/applicants</code></li>
    </ul>
  </div>

  <!-- FOOTER -->
  <div style="margin-top:40px; color:#64748b;">
    © 2026 John Miko Echano • Scholarship Management System
  </div>

</div>