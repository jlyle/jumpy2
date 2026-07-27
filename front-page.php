<?php get_header(); ?>
<section class="hero">
  <div class="container hero-grid">
    <div class="hero-copy">
      <div class="kicker">Veteran-owned IT career services</div>
      <h1>IT resumes that get interviews.</h1>
      <p>Professional resume writing, LinkedIn optimization, and career positioning for Linux, cloud, DevOps, and enterprise IT professionals. Backed by decades of real-world technical experience.</p>
      <div class="badge-strip">
        <span class="badge">U.S. Veteran</span>
        <span class="badge">10% discount on all services</span>
        <span class="badge">25+ years in IT</span>
      </div>
      <div class="hero-actions">
        <a class="button" href="<?php echo esc_url(home_url('/services')); ?>">View Services</a>
        <a class="button alt" href="<?php echo esc_url(home_url('/whoami')); ?>">whoami</a>
      </div>
    </div>
    <div class="hero-media">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero-banner.png'); ?>" alt="Jumpymouse IT Career Services banner">
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title">What I help with</h2>
    <p class="section-intro">The site is built around a clear niche: helping technical professionals present their experience in a way that hiring managers can understand quickly.</p>
    <div class="grid-3">
      <div class="card">
        <h3>IT Resume Rewrites</h3>
        <p>ATS-aware, technically accurate resumes for Linux, cloud, DevOps, system administration, and enterprise roles.</p>
      </div>
      <div class="card">
        <h3>LinkedIn Optimization</h3>
        <p>Headline, About section, skills, and positioning updates that align with modern technical hiring searches.</p>
      </div>
      <div class="card">
        <h3>Veteran-Friendly Guidance</h3>
        <p>Support for veterans and career changers translating military or deep technical experience into a strong civilian story.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container split">
    <div>
      <h2 class="section-title">Why this works</h2>
      <p class="section-intro">You are not getting a generic writer. You are working with someone who understands technical roles, customer-facing IT work, and how to frame complex experience into clean business value.</p>
      <ul class="clean">
        <li>Focused on Linux, RHEL, cloud, DevOps, OpenShift, and system administration roles</li>
        <li>Veteran-owned business with a practical, no-fluff style</li>
        <li>Designed to grow from Fiverr into Jumpymouse LLC services</li>
      </ul>
    </div>
    <div class="card">
      <h3>Launch offer</h3>
      <p class="price">10% OFF <small>all services</small></p>
      <p>Use this section as your main promotional callout on the site homepage.</p>
      <a class="button" href="<?php echo esc_url(home_url('/services')); ?>">See Packages</a>
    </div>
  </div>
</section>
<?php get_footer(); ?>
