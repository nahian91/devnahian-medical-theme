<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <!-- 01. CLINICAL BREADCRUMB BANNER -->
  <section class="devnahian-auracare-breadcrumb-banner" aria-label="Page Breadcrumb">
    <div class="devnahian-auracare-container">
      <div class="devnahian-auracare-breadcrumb-content">
        <div class="devnahian-auracare-badge-sub">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          <?php 
          $categories = get_the_category();
          echo ! empty( $categories ) ? esc_html( $categories[0]->name . ' Research & Wellness' ) : 'Physician Research & Wellness';
          ?>
        </div>
        <h1 class="devnahian-auracare-breadcrumb-title"><?php the_title(); ?></h1>
        
        <div class="devnahian-auracare-breadcrumb-meta-row">
          <div class="devnahian-auracare-breadcrumb-meta-item">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg>
            <span><?php echo ceil( str_word_count( strip_tags( get_the_content() ) ) / 200 ); ?> min read</span>
          </div>
          <div class="devnahian-auracare-breadcrumb-meta-item">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <span>Published: <?php echo get_the_date( 'F Y' ); ?></span>
          </div>
          <div class="devnahian-auracare-breadcrumb-meta-item">
            <svg width="16" height="16" fill="none" stroke="var(--devnahian-auracare-success)" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
            <span style="color:var(--devnahian-auracare-slate-700); font-weight:700;">Peer Reviewed by AuraCure Medical Council</span>
          </div>
        </div>

        <nav class="devnahian-auracare-breadcrumb-nav" aria-label="Breadcrumb navigation">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
          <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>">Journal</a>
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
          <span>Article Details</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- 02. SINGLE BLOG POST & SIDEBAR -->
  <main class="devnahian-auracare-section-padding">
    <div class="devnahian-auracare-container">
      <div class="devnahian-auracare-article-grid">

        <!-- Main Editorial Content -->
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'devnahian-auracare-article-post' ); ?>>
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'full', array( 'class' => 'devnahian-auracare-article-featured-img' ) ); ?>
          <?php else : ?>
            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=1000&auto=format&fit=crop&q=80" alt="<?php the_title_attribute(); ?>" class="devnahian-auracare-article-featured-img">
          <?php endif; ?>

          <div class="devnahian-auracare-article-prose">
            <?php the_content(); ?>
          </div>

          <!-- Tags & Share Footer -->
          <div class="devnahian-auracare-post-footer">
            <div class="devnahian-auracare-post-tags">
              <span style="font-weight:700; font-size:0.85rem; color:var(--devnahian-auracare-slate-800);">Topics:</span>
              <?php 
              $tags = get_the_tags();
              if ( $tags ) {
                  foreach ( $tags as $tag ) {
                      echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '" class="devnahian-auracare-tag-pill">' . esc_html( $tag->name ) . '</a>';
                  }
              } else {
                  echo '<span style="font-size:0.85rem; color:var(--devnahian-auracare-slate-400);">Clinical Research</span>';
              }
              ?>
            </div>

            <div class="devnahian-auracare-share-group">
              <span style="color:var(--devnahian-auracare-slate-500);">Share:</span>
              <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode( get_the_title() ); ?>" target="_blank" rel="noopener noreferrer" class="devnahian-auracare-share-btn" aria-label="Share on X">
                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
              </a>
              <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer" class="devnahian-auracare-share-btn" aria-label="Share on LinkedIn">
                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
              </a>
              <a href="mailto:?subject=<?php echo urlencode( get_the_title() ); ?>&body=<?php echo urlencode( get_permalink() ); ?>" class="devnahian-auracare-share-btn" aria-label="Share by Email">
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 7L2 7"/></svg>
              </a>
            </div>
          </div>

          <!-- Author Bio Box -->
          <div class="devnahian-auracare-author-card">
            <div class="devnahian-auracare-author-img-wrap">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 90, '', get_the_author(), array( 'class' => 'avatar' ) ); ?>
            </div>
            <div class="devnahian-auracare-author-details">
              <h4><?php the_author(); ?></h4>
              <span><?php echo esc_html( get_the_author_meta( 'description' ) ? get_the_author_meta( 'description' ) : 'Attending Physician & Clinical Researcher at AuraCure Institute.' ); ?></span>
              <p>
                <?php echo esc_html( get_the_author_meta( 'user_description' ) ? get_the_author_meta( 'user_description' ) : 'Specialized in evidence-based medical therapies, diagnostic precision, and patient-first clinical recovery workflows.' ); ?>
              </p>
              <div style="display:flex; gap:0.85rem; align-items:center; flex-wrap:wrap;">
                <a href="<?php echo esc_url( home_url( '/doctors' ) ); ?>" class="devnahian-auracare-btn devnahian-auracare-btn-primary" style="padding:0.65rem 1.35rem; font-size:0.85rem;">
                  View Doctor Profile
                </a>
                <a href="<?php echo esc_url( home_url( '/appointment' ) ); ?>" class="devnahian-auracare-btn devnahian-auracare-btn-outline" style="padding:0.65rem 1.35rem; font-size:0.85rem;">
                  Book Consultation
                </a>
              </div>
            </div>
          </div>

          <!-- Discussion & Comments (Native WordPress Comments Template) -->
          <div class="devnahian-auracare-comments-section">
            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
          </div>

        </article>

        <!-- Right Column: Sidebar (Latest Posts & Categories) -->
        <aside class="devnahian-auracare-sidebar">

          <!-- 01. Latest Posts Widget -->
          <div class="devnahian-auracare-widget">
            <h4 class="devnahian-auracare-widget-title">Latest Posts</h4>
            <div class="devnahian-auracare-recent-list">
              <?php
              $recent_posts = new WP_Query( array(
                  'posts_per_page' => 4,
                  'post__not_in'   => array( get_the_ID() ),
              ) );

              if ( $recent_posts->have_posts() ) :
                  while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
              ?>
                <div class="devnahian-auracare-recent-item">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'devnahian-auracare-recent-thumb' ) ); ?>
                  <?php else : ?>
                    <img src="https://images.unsplash.com/photo-1530497610245-94d3c16cda28?w=200&auto=format&fit=crop&q=80" alt="<?php the_title_attribute(); ?>" class="devnahian-auracare-recent-thumb">
                  <?php endif; ?>
                  <div class="devnahian-auracare-recent-info">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <span><?php echo get_the_date( 'M Y' ); ?> &bull; <?php echo ceil( str_word_count( strip_tags( get_the_content() ) ) / 200 ); ?> min read</span>
                  </div>
                </div>
              <?php
                  endwhile;
                  wp_reset_postdata();
              endif;
              ?>
            </div>
          </div>

          <!-- 02. Categories Widget -->
          <div class="devnahian-auracare-widget">
            <h4 class="devnahian-auracare-widget-title">Categories</h4>
            <ul class="devnahian-auracare-cat-list">
              <?php
              $categories = get_categories( array(
                  'orderby' => 'name',
                  'order'   => 'ASC',
              ) );

              foreach ( $categories as $category ) {
                  echo '<li>';
                  echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="devnahian-auracare-cat-link">';
                  echo '<span>' . esc_html( $category->name ) . '</span>';
                  echo '<span class="devnahian-auracare-cat-count">' . esc_html( $category->count ) . '</span>';
                  echo '</a>';
                  echo '</li>';
              }
              ?>
            </ul>
          </div>

        </aside>

      </div>
    </div>
  </main>
<?php endwhile; ?>

  <!-- STYLES SPECIFIC TO SINGLE BLOG POST -->
  <style>
    .devnahian-auracare-breadcrumb-meta-row {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 1.25rem;
      font-size: 0.875rem;
      color: var(--devnahian-auracare-slate-500);
      margin-bottom: 1.5rem;
    }
    .devnahian-auracare-breadcrumb-meta-item {
      display: flex;
      align-items: center;
      gap: 0.4rem;
    }
    .devnahian-auracare-article-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 3.5rem;
      align-items: start;
    }
    @media (min-width: 992px) {
      .devnahian-auracare-article-grid {
        grid-template-columns: 1fr 360px;
        gap: 4rem;
      }
    }
    .devnahian-auracare-article-post {
      background: #ffffff;
    }
    .devnahian-auracare-article-featured-img {
      width: 100%;
      height: 440px;
      object-fit: cover;
      border-radius: var(--devnahian-auracare-radius-xl);
      box-shadow: var(--devnahian-auracare-shadow-md);
      margin-bottom: 2.5rem;
      border: 1px solid var(--devnahian-auracare-slate-200);
    }
    @media (min-width: 768px) {
      .devnahian-auracare-article-featured-img { height: 500px; }
    }
    .devnahian-auracare-article-prose {
      font-size: 1.05rem;
      color: var(--devnahian-auracare-slate-700);
      line-height: 1.8;
    }
    .devnahian-auracare-article-prose h2 {
      font-size: 1.85rem;
      margin-top: 2.5rem;
      margin-bottom: 1rem;
      color: var(--devnahian-auracare-slate-900);
    }
    .devnahian-auracare-article-prose p {
      margin-bottom: 1.5rem;
    }
    .devnahian-auracare-quote-box {
      background: var(--devnahian-auracare-primary-soft);
      border-left: 4px solid var(--devnahian-auracare-primary);
      padding: 1.85rem 2rem;
      border-radius: 0 var(--devnahian-auracare-radius-lg) var(--devnahian-auracare-radius-lg) 0;
      margin: 2.5rem 0;
      font-style: italic;
      font-size: 1.15rem;
      color: var(--devnahian-auracare-slate-800);
      line-height: 1.7;
    }
    .devnahian-auracare-quote-author {
      display: block;
      margin-top: 0.85rem;
      font-style: normal;
      font-weight: 700;
      font-size: 0.875rem;
      color: var(--devnahian-auracare-primary-dark);
    }
    .devnahian-auracare-findings-card {
      background: #ffffff;
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-lg);
      padding: 2rem;
      box-shadow: var(--devnahian-auracare-shadow-sm);
      margin: 2.5rem 0;
    }
    .devnahian-auracare-findings-card h4 {
      font-size: 1.25rem;
      margin-bottom: 1.25rem;
      display: flex;
      align-items: center;
      gap: 0.6rem;
      color: var(--devnahian-auracare-slate-900);
    }
    .devnahian-auracare-findings-list {
      display: flex;
      flex-direction: column;
      gap: 0.85rem;
      font-size: 0.95rem;
    }
    .devnahian-auracare-finding-item {
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
      line-height: 1.6;
    }
    .devnahian-auracare-finding-item svg {
      color: var(--devnahian-auracare-secondary);
      flex-shrink: 0;
      margin-top: 4px;
    }
    .devnahian-auracare-post-footer {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      padding: 2rem 0;
      border-top: 1px solid var(--devnahian-auracare-slate-200);
      border-bottom: 1px solid var(--devnahian-auracare-slate-200);
      margin: 3rem 0;
    }
    @media (min-width: 640px) {
      .devnahian-auracare-post-footer {
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
      }
    }
    .devnahian-auracare-post-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      align-items: center;
    }
    .devnahian-auracare-tag-pill {
      font-size: 0.8rem;
      font-weight: 700;
      color: var(--devnahian-auracare-slate-600);
      background: var(--devnahian-auracare-slate-100);
      padding: 0.35rem 0.85rem;
      border-radius: var(--devnahian-auracare-radius-full);
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-tag-pill:hover {
      background: var(--devnahian-auracare-primary);
      color: #ffffff;
    }
    .devnahian-auracare-share-group {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      font-weight: 700;
      font-size: 0.875rem;
    }
    .devnahian-auracare-share-btn {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: var(--devnahian-auracare-slate-100);
      border: 1px solid var(--devnahian-auracare-slate-200);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--devnahian-auracare-slate-600);
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-share-btn:hover {
      background: var(--devnahian-auracare-primary);
      color: #ffffff;
      border-color: var(--devnahian-auracare-primary);
    }
    .devnahian-auracare-author-card {
      background: var(--devnahian-auracare-slate-50);
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-xl);
      padding: 2.25rem 2rem;
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      margin-bottom: 3.5rem;
    }
    @media (min-width: 640px) {
      .devnahian-auracare-author-card {
        flex-direction: row;
        align-items: center;
      }
    }
    .devnahian-auracare-author-img-wrap {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      overflow: hidden;
      border: 3px solid var(--devnahian-auracare-primary);
      flex-shrink: 0;
    }
    .devnahian-auracare-author-img-wrap img,
    .devnahian-auracare-author-img-wrap .avatar {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .devnahian-auracare-author-details h4 {
      font-size: 1.25rem;
      margin-bottom: 0.25rem;
    }
    .devnahian-auracare-author-details span {
      font-size: 0.825rem;
      color: var(--devnahian-auracare-slate-500);
      display: block;
      margin-bottom: 0.75rem;
    }
    .devnahian-auracare-author-details p {
      font-size: 0.925rem;
      color: var(--devnahian-auracare-slate-600);
      line-height: 1.6;
      margin-bottom: 1rem;
    }
    .devnahian-auracare-comments-section h3 {
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
    }
    /* Sidebar Base */
    .devnahian-auracare-sidebar {
      display: flex;
      flex-direction: column;
      gap: 2.5rem;
    }
    .devnahian-auracare-widget {
      background: #ffffff;
      border: 1px solid var(--devnahian-auracare-slate-200);
      border-radius: var(--devnahian-auracare-radius-xl);
      padding: 2rem;
      box-shadow: var(--devnahian-auracare-shadow-sm);
    }
    .devnahian-auracare-widget-title {
      font-size: 1.25rem;
      margin-bottom: 1.25rem;
      padding-bottom: 0.75rem;
      border-bottom: 2px solid var(--devnahian-auracare-slate-100);
      position: relative;
    }
    .devnahian-auracare-widget-title::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 40px;
      height: 2px;
      background: var(--devnahian-auracare-primary);
    }
    .devnahian-auracare-recent-list {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }
    .devnahian-auracare-recent-item {
      display: flex;
      gap: 1rem;
      align-items: center;
    }
    .devnahian-auracare-recent-thumb,
    .devnahian-auracare-recent-item img {
      width: 70px;
      height: 70px;
      border-radius: var(--devnahian-auracare-radius-md);
      object-fit: cover;
      flex-shrink: 0;
    }
    .devnahian-auracare-recent-info h5 {
      font-size: 0.925rem;
      line-height: 1.35;
      margin-bottom: 0.25rem;
    }
    .devnahian-auracare-recent-info h5 a {
      color: var(--devnahian-auracare-slate-900);
    }
    .devnahian-auracare-recent-info h5 a:hover {
      color: var(--devnahian-auracare-primary);
    }
    .devnahian-auracare-recent-info span {
      font-size: 0.75rem;
      color: var(--devnahian-auracare-slate-400);
    }
    .devnahian-auracare-cat-list {
      display: flex;
      flex-direction: column;
      gap: 0.65rem;
    }
    .devnahian-auracare-cat-link {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.7rem 0.9rem;
      border-radius: var(--devnahian-auracare-radius-sm);
      background: var(--devnahian-auracare-slate-50);
      color: var(--devnahian-auracare-slate-700);
      font-size: 0.88rem;
      font-weight: 600;
      transition: var(--devnahian-auracare-transition);
      border: 1px solid var(--devnahian-auracare-slate-200);
    }
    .devnahian-auracare-cat-link:hover {
      background: var(--devnahian-auracare-primary-soft);
      color: var(--devnahian-auracare-primary);
      border-color: rgba(2, 132, 199, 0.3);
      padding-left: 1.15rem;
    }
    .devnahian-auracare-cat-count {
      font-size: 0.75rem;
      font-weight: 700;
      color: var(--devnahian-auracare-slate-500);
      background: #ffffff;
      padding: 0.15rem 0.55rem;
      border-radius: var(--devnahian-auracare-radius-full);
      border: 1px solid var(--devnahian-auracare-slate-200);
    }
    .devnahian-auracare-cat-link:hover .devnahian-auracare-cat-count {
      background: var(--devnahian-auracare-primary);
      color: #ffffff;
      border-color: var(--devnahian-auracare-primary);
    }
  </style>

<?php get_footer(); ?>