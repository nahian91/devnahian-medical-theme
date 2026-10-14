<?php get_header(); ?>

  <!-- 01. CLINICAL BREADCRUMB BANNER -->
  <section class="devnahian-auracare-breadcrumb-banner" aria-label="Page Breadcrumb">
    <div class="devnahian-auracare-container">
      <div class="devnahian-auracare-breadcrumb-content">
        <div class="devnahian-auracare-badge-sub">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          Physician Research &amp; Wellness
        </div>
        <h1 class="devnahian-auracare-breadcrumb-title">Clinical <span>Journal</span></h1>
        <p class="devnahian-auracare-breadcrumb-desc">
          Evidence-based medical publications, diagnostic breakthroughs, and preventative insights authored by AuraCure faculty.
        </p>
        <nav class="devnahian-auracare-breadcrumb-nav" aria-label="Breadcrumb navigation">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
          <span>Medical Articles</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- 02. BLOG DIRECTORY (3-COLUMN GRID & DYNAMIC WORDPRESS LOOP) -->
  <main class="devnahian-auracare-section-padding">
    <div class="devnahian-auracare-container">

      <div class="devnahian-auracare-articles-grid" id="articlesGrid">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'devnahian-auracare-article-card' ); ?>>
              <div class="devnahian-auracare-article-media">
                <?php 
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<span class="devnahian-auracare-article-cat-badge">' . esc_html( $categories[0]->name ) . '</span>';
                }
                ?>
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( 'large', array( 'class' => 'devnahian-auracare-article-img' ) ); ?>
                <?php else : ?>
                  <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=700&auto=format&fit=crop&q=80" alt="<?php the_title_attribute(); ?>" class="devnahian-auracare-article-img">
                <?php endif; ?>
              </div>

              <div class="devnahian-auracare-article-body">
                <div class="devnahian-auracare-article-meta-row">
                  <span><?php echo get_the_date( 'M Y' ); ?></span>
                  <span>&bull;</span>
                  <span><?php echo ceil( str_word_count( strip_tags( get_the_content() ) ) / 200 ); ?> min read</span>
                </div>

                <h3 class="devnahian-auracare-article-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>

                <p class="devnahian-auracare-article-snippet">
                  <?php echo wp_strip_all_tags( get_the_excerpt() ); ?>
                </p>

                <div class="devnahian-auracare-article-footer">
                  <div class="devnahian-auracare-article-doc-mini">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 28, '', get_the_author(), array( 'class' => 'avatar' ) ); ?>
                    <span><?php the_author(); ?></span>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="devnahian-auracare-read-arrow">Read &rarr;</a>
                </div>
              </div>
            </article>
          <?php endwhile; ?>
        <?php else : ?>
          <p style="text-align: center; grid-column: 1 / -1; color: var(--devnahian-auracare-slate-500); font-size: 1.1rem; padding: 3rem 0;">
            No medical articles have been published yet. Please check back soon.
          </p>
        <?php endif; ?>
      </div>

      <!-- 03. NATIVE WORDPRESS PAGINATION COMPONENT -->
      <nav class="devnahian-auracare-pagination-nav" aria-label="Blog Pagination">
        <?php
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        echo paginate_links( array(
            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'    => '?paged=%#%',
            'current'   => max( 1, get_query_var( 'paged' ) ),
            'total'     => $wp_query->max_num_pages,
            'type'      . 'array',
            'prev_text' => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>',
            'next_text' => '<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>',
            'prev_next' => true,
        ) );
        ?>
      </nav>

    </div>
  </main>

  <!-- STYLES SPECIFIC TO 3-COLUMN BLOG GRID & PAGINATION -->
  <style>
    .devnahian-auracare-articles-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2rem;
    }
    @media (min-width: 640px) {
      .devnahian-auracare-articles-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (min-width: 1024px) {
      .devnahian-auracare-articles-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 2.25rem;
      }
    }

    .devnahian-auracare-article-card {
      background: #ffffff;
      border-radius: var(--devnahian-auracare-radius-lg);
      border: 1px solid var(--devnahian-auracare-slate-200);
      box-shadow: var(--devnahian-auracare-shadow-sm);
      overflow: hidden;
      transition: var(--devnahian-auracare-transition);
      display: flex;
      flex-direction: column;
    }
    .devnahian-auracare-article-card:hover {
      transform: translateY(-8px);
      box-shadow: var(--devnahian-auracare-shadow-xl);
      border-color: rgba(2, 132, 199, 0.35);
    }
    .devnahian-auracare-article-media {
      position: relative;
      height: 220px;
      overflow: hidden;
      background: var(--devnahian-auracare-slate-100);
    }
    .devnahian-auracare-article-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .devnahian-auracare-article-card:hover .devnahian-auracare-article-img {
      transform: scale(1.08);
    }
    .devnahian-auracare-article-cat-badge {
      position: absolute;
      top: 14px;
      left: 14px;
      background: rgba(255, 255, 255, 0.94);
      backdrop-filter: blur(8px);
      padding: 0.3rem 0.8rem;
      border-radius: var(--devnahian-auracare-radius-full);
      font-size: 0.72rem;
      font-weight: 800;
      color: var(--devnahian-auracare-primary);
      text-transform: uppercase;
      letter-spacing: 0.05em;
      box-shadow: var(--devnahian-auracare-shadow-xs);
      z-index: 2;
    }
    .devnahian-auracare-article-body {
      padding: 1.8rem;
      display: flex;
      flex-direction: column;
      flex: 1;
    }
    .devnahian-auracare-article-meta-row {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      font-size: 0.8rem;
      color: var(--devnahian-auracare-slate-400);
      margin-bottom: 0.75rem;
    }
    .devnahian-auracare-article-title {
      font-size: 1.25rem;
      margin-bottom: 0.75rem;
      line-height: 1.35;
    }
    .devnahian-auracare-article-title a {
      color: var(--devnahian-auracare-slate-900);
    }
    .devnahian-auracare-article-title a:hover {
      color: var(--devnahian-auracare-primary);
    }
    .devnahian-auracare-article-snippet {
      font-size: 0.9rem;
      color: var(--devnahian-auracare-slate-500);
      line-height: 1.6;
      margin-bottom: 1.5rem;
      flex-grow: 1;
    }
    .devnahian-auracare-article-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-top: 1px solid var(--devnahian-auracare-slate-100);
      padding-top: 1.15rem;
      margin-top: auto;
    }
    .devnahian-auracare-article-doc-mini {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      font-size: 0.825rem;
      font-weight: 700;
      color: var(--devnahian-auracare-slate-800);
    }
    .devnahian-auracare-article-doc-mini img,
    .devnahian-auracare-article-doc-mini .avatar {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      object-fit: cover;
    }
    .devnahian-auracare-read-arrow {
      color: var(--devnahian-auracare-primary);
      font-weight: 700;
      font-size: 0.85rem;
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-article-card:hover .devnahian-auracare-read-arrow {
      transform: translateX(4px);
    }

    /* WordPress Pagination Alignment */
    .devnahian-auracare-pagination-nav {
      margin-top: 4.5rem;
      display: flex;
      justify-content: center;
    }
    .devnahian-auracare-pagination-nav .page-numbers {
      display: inline-flex;
      align-items: center;
      gap: 0.45rem;
      background: #ffffff;
      padding: 0.45rem;
      border-radius: var(--devnahian-auracare-radius-full);
      border: 1px solid var(--devnahian-auracare-slate-200);
      box-shadow: var(--devnahian-auracare-shadow-sm);
      list-style: none;
    }
    .devnahian-auracare-pagination-nav .page-numbers li,
    .devnahian-auracare-pagination-nav .page-numbers .page-numbers {
      display: inline-flex;
    }
    .devnahian-auracare-pagination-nav a.page-numbers,
    .devnahian-auracare-pagination-nav span.page-numbers {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      border: 1px solid transparent;
      background: transparent;
      color: var(--devnahian-auracare-slate-700);
      font-size: 0.9rem;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: var(--devnahian-auracare-transition);
    }
    .devnahian-auracare-pagination-nav a.page-numbers:hover {
      background: var(--devnahian-auracare-slate-100);
      color: var(--devnahian-auracare-primary);
    }
    .devnahian-auracare-pagination-nav span.page-numbers.current {
      background: var(--devnahian-auracare-primary);
      color: #ffffff;
      box-shadow: 0 4px 12px rgba(2, 132, 199, 0.35);
    }
  </style>

<?php get_footer(); ?>