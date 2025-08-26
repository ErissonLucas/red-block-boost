<?php
get_header();

$theme_uri = get_template_directory_uri();
$img_product = $theme_uri . '/assets/images/fit-block-product.jpg';
$img_hero = $theme_uri . '/assets/images/hero-woman.jpg';
$img_testimonial_1 = $theme_uri . '/assets/images/testimonial-1.jpg';
$img_testimonial_2 = $theme_uri . '/assets/images/testimonial-2.jpg';
$img_testimonial_3 = $theme_uri . '/assets/images/testimonial-3.jpg';

$kits = [
  [
    'name' => 'FIT BLOCK 30 dias',
    'price' => 'R$ 129,00',
    'oldPrice' => 'R$ 159,00',
    'perks' => ['1 frasco', 'Tratamento de 30 dias', 'Suporte por e-mail'],
    'highlight' => false,
    'tag' => '',
  ],
  [
    'name' => 'KIT ECONÔMICO 90 dias',
    'price' => 'R$ 297,00',
    'oldPrice' => 'R$ 357,00',
    'perks' => ['3 frascos', 'Tratamento de 90 dias', 'Desconto exclusivo', 'Frete com condições'],
    'highlight' => true,
    'tag' => 'MAIS VENDIDO',
  ],
  [
    'name' => 'KIT TURBO 150 dias',
    'price' => 'R$ 495,00',
    'oldPrice' => 'R$ 595,00',
    'perks' => ['5 frascos', 'Tratamento de 150 dias', 'Maior desconto', 'Frete grátis'],
    'highlight' => false,
    'tag' => '',
  ],
];

$benefits = [
  [ 'icon' => '💧', 'title' => 'Ação Diurética', 'desc' => 'Auxilia a reduzir retenção de líquidos e inchaço' ],
  [ 'icon' => '🔥', 'title' => 'Ação Termogênica', 'desc' => 'Acelera o metabolismo de forma natural' ],
  [ 'icon' => '🍽️', 'title' => 'Bloqueio do Apetite', 'desc' => 'Promove saciedade e controla a fome' ],
  [ 'icon' => '🌿', 'title' => '100% Natural', 'desc' => 'Fórmula natural sem glúten e lactose' ],
  [ 'icon' => '✅', 'title' => 'Certificações', 'desc' => 'FDA Approved e GMP Quality' ],
  [ 'icon' => '⚡', 'title' => 'Resultados Rápidos', 'desc' => 'Primeiros resultados em semanas' ],
];

$faqs = [
  [ 'q' => 'Como devo tomar o FIT BLOCK?', 'a' => 'Tome 1 cápsula ao dia, de preferência pela manhã e nunca em jejum. Beba bastante água e associe a uma alimentação equilibrada e atividade física.' ],
  [ 'q' => 'Em quanto tempo verei resultados?', 'a' => 'Os resultados variam de acordo com hábitos e biotipo. Em geral, clientes relatam melhora de saciedade e redução de inchaço nas primeiras semanas.' ],
  [ 'q' => 'Existe alguma contraindicação?', 'a' => 'Contraindicado para cardiopatas, gestantes, lactantes e menores de 18 anos. Não associar com bebidas alcoólicas ou medicamentos sem orientação profissional.' ],
  [ 'q' => 'O produto contém glúten ou lactose?', 'a' => 'Não. FIT BLOCK é livre de glúten e lactose.' ],
  [ 'q' => 'O FIT BLOCK é aprovado por órgãos reguladores?', 'a' => 'A cliente informa certificações como FDA Approved e GMP Quality. Consulte o rótulo do seu lote e, em caso de dúvidas, fale com nosso suporte.' ],
];
?>

<main class="min-h-screen scroll-smooth bg-background text-foreground">
  <div class="fixed bottom-6 left-0 right-0 z-50 flex justify-center px-4 sm:hidden">
    <?php rbb_landing_button( 'QUERO EMAGRECER AGORA', '#ofertas' ); ?>
  </div>

  <section class="relative overflow-hidden bg-gradient-hero pt-20 pb-32">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-glow/10 via-transparent to-primary-deep/10"></div>
    <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8 relative">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="text-center lg:text-left">
          <?php rbb_badge( 'Suplemento para Emagrecimento', 'mb-6' ); ?>
          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight text-primary-foreground mb-6">
            Transforme seu corpo com <span class="text-primary-glow">FIT BLOCK</span>
          </h1>
          <p class="text-lg sm:text-xl text-primary-foreground/90 mb-8 leading-relaxed max-w-2xl">
            Fórmula 100% natural com ação <strong>diurética</strong>, <strong>termogênica</strong> e <strong>bloqueadora de apetite</strong>,
            desenvolvida para potencializar seus resultados de forma segura e equilibrada.
          </p>

          <div class="grid sm:grid-cols-2 gap-4 mb-8 text-primary-foreground/80">
            <div class="flex items-center gap-3"><span class="w-3 h-3 rounded-full bg-primary-glow"></span><span>Reduz retenção de líquidos</span></div>
            <div class="flex items-center gap-3"><span class="w-3 h-3 rounded-full bg-primary-glow"></span><span>Acelera o metabolismo</span></div>
            <div class="flex items-center gap-3"><span class="w-3 h-3 rounded-full bg-primary-glow"></span><span>Controla o apetite</span></div>
            <div class="flex items-center gap-3"><span class="w-3 h-3 rounded-full bg-primary-glow"></span><span>Sem glúten e lactose</span></div>
          </div>

          <div class="flex flex-col sm:flex-row gap-4 mb-8">
            <?php rbb_landing_button( 'QUERO EMAGRECER AGORA', '#ofertas', 'primary', 'lg' ); ?>
            <?php rbb_landing_button( 'Como funciona', '#conheca', 'hero' ); ?>
          </div>

          <div class="flex flex-wrap gap-3">
            <?php rbb_badge( 'FDA Approved', 'bg-primary-foreground/10 text-primary-foreground border-primary-foreground/20' ); ?>
            <?php rbb_badge( 'GMP Quality', 'bg-primary-foreground/10 text-primary-foreground border-primary-foreground/20' ); ?>
            <?php rbb_badge( '100% Natural', 'bg-primary-foreground/10 text-primary-foreground border-primary-foreground/20' ); ?>
          </div>
        </div>

        <div class="relative">
          <div class="relative mx-auto w-full max-w-md">
            <img src="<?php echo esc_url( $img_hero ); ?>" alt="Mulher confiante com FIT BLOCK" class="w-full h-auto rounded-3xl shadow-2xl" loading="lazy" />
            <div class="absolute -top-6 -right-6 w-32 h-32 rounded-full bg-primary-foreground shadow-xl flex flex-col items-center justify-center text-center">
              <p class="text-sm font-bold text-primary">Ação</p>
              <p class="text-sm font-bold text-primary">Tripla</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gradient-accent">
    <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
      <?php rbb_section_title( [ 'title' => 'Se elas recomendam, pode confiar...', 'subtitle' => 'Amiga, FIT BLOCK é para você!' ] ); ?>
      <div class="grid md:grid-cols-3 gap-8">
        <?php rbb_testimonial_card( $img_testimonial_1, 'Me senti mais leve e com menos vontade de beliscar durante o dia.', '@maria_fitness' ); ?>
        <?php rbb_testimonial_card( $img_testimonial_2, 'Incrível como consegui controlar meu apetite de forma natural.', '@ana_saude' ); ?>
        <?php rbb_testimonial_card( $img_testimonial_3, 'Em poucas semanas já notei a diferença no meu corpo!', '@julia_wellness' ); ?>
      </div>
    </div>
  </section>

  <section id="conheca" class="py-24">
    <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div>
          <?php rbb_section_title( [ 'title' => 'Conheça o poder do FIT BLOCK!', 'subtitle' => 'Uma solução natural que atua em múltiplas frentes para apoiar sua jornada de emagrecimento com equilíbrio e segurança.', 'center' => false ] ); ?>
          <div class="mb-8">
            <img src="<?php echo esc_url( $img_product ); ?>" alt="Produto FIT BLOCK" class="w-full max-w-md mx-auto lg:mx-0 rounded-3xl shadow-elegant" loading="lazy" />
          </div>
          <?php rbb_landing_button( 'QUERO AGORA!', '#ofertas', 'primary', 'lg' ); ?>
        </div>
        <div class="grid sm:grid-cols-2 gap-6">
          <?php rbb_benefit_card( '🍊', 'Morosil®', 'Ajuda a reduzir gordura abdominal e melhora o metabolismo.' ); ?>
          <?php rbb_benefit_card( '🌿', 'Spirulina', 'Fonte de proteína e antioxidantes que auxilia na saciedade.' ); ?>
          <?php rbb_benefit_card( '🌾', 'Psyllium', 'Fibras que promovem sensação de saciedade natural.' ); ?>
          <?php rbb_benefit_card( '🌊', 'Fucus & Cavalinha', 'Apoio diurético leve e sensação de leveza.' ); ?>
          <?php rbb_benefit_card( '🍃', 'Sené & Cáscara', 'Suporte natural ao trânsito intestinal.' ); ?>
          <?php rbb_benefit_card( '🍆', 'Berinjela em pó', 'Fibras que auxiliam no controle glicêmico.' ); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gradient-primary text-primary-foreground">
    <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
      <?php rbb_section_title( [ 'title' => 'Conheça os benefícios do FIT BLOCK para você!', 'subtitle' => 'Solução natural, sem glúten e sem lactose, com certificações e resultados surpreendentes.' ] ); ?>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mb-12">
        <?php foreach ( $benefits as $b ) : ?>
          <div class="text-center p-6 rounded-2xl bg-primary-foreground/10 backdrop-blur-sm border border-primary-foreground/20">
            <div class="text-3xl mb-3"><?php echo esc_html( $b['icon'] ); ?></div>
            <h4 class="font-bold mb-2"><?php echo esc_html( $b['title'] ); ?></h4>
            <p class="text-sm text-primary-foreground/80"><?php echo esc_html( $b['desc'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="text-center">
        <?php rbb_landing_button( 'QUERO EXPERIMENTAR O FIT BLOCK!', '#ofertas', 'hero', 'lg' ); ?>
      </div>
    </div>
  </section>

  <section id="ofertas" class="py-24 bg-gradient-accent">
    <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
      <?php rbb_section_title( [ 'title' => 'Escolha a melhor opção para você!', 'subtitle' => 'Aproveite a promoção de lançamento por tempo limitado.' ] ); ?>
      <div class="grid md:grid-cols-3 gap-8 mb-12">
        <?php foreach ( $kits as $kit ) : $highlight = ! empty( $kit['highlight'] ); ?>
          <div class="relative p-8 rounded-3xl shadow-elegant transition-smooth hover:shadow-glow <?php echo $highlight ? 'bg-gradient-primary text-primary-foreground scale-105' : 'bg-card'; ?>">
            <?php if ( ! empty( $kit['tag'] ) ) : ?>
              <span class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-primary text-primary-foreground px-6 py-2 rounded-full text-sm font-bold shadow-lg"><?php echo esc_html( $kit['tag'] ); ?></span>
            <?php endif; ?>
            <div class="text-center mb-6">
              <img src="<?php echo esc_url( $img_product ); ?>" alt="Produto" class="w-24 h-24 mx-auto object-contain mb-4" loading="lazy" />
              <h3 class="text-xl font-bold mb-2"><?php echo esc_html( $kit['name'] ); ?></h3>
              <p class="text-sm line-through <?php echo $highlight ? 'text-primary-foreground/70' : 'text-muted-foreground'; ?>"><?php echo esc_html( $kit['oldPrice'] ); ?></p>
              <p class="text-3xl font-bold <?php echo $highlight ? 'text-primary-foreground' : 'text-primary'; ?>"><?php echo esc_html( $kit['price'] ); ?></p>
            </div>
            <ul class="space-y-2 mb-6 <?php echo $highlight ? 'text-primary-foreground/90' : 'text-muted-foreground'; ?>">
              <?php foreach ( $kit['perks'] as $perk ) : ?>
                <li class="flex items-center gap-2"><span class="w-2 h-2 rounded-full <?php echo $highlight ? 'bg-primary-foreground' : 'bg-primary'; ?>"></span><?php echo esc_html( $perk ); ?></li>
              <?php endforeach; ?>
            </ul>
            <?php rbb_landing_button( 'COMPRAR AGORA', '#checkout', $highlight ? 'hero' : 'primary', 'default', 'w-full' ); ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="py-20">
    <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
      <?php rbb_section_title( [ 'title' => 'Perguntas Frequentes sobre o FIT BLOCK' ] ); ?>
      <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <?php foreach ( $faqs as $f ) : ?>
          <div class="p-6 rounded-2xl bg-card border border-border shadow-sm">
            <h4 class="text-lg font-bold text-card-foreground mb-3"><?php echo esc_html( $f['q'] ); ?></h4>
            <p class="text-sm text-muted-foreground leading-relaxed"><?php echo esc_html( $f['a'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <footer class="bg-muted py-12">
    <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <p class="text-sm text-muted-foreground mb-4">© <?php echo esc_html( date('Y') ); ?> FIT BLOCK — Todos os direitos reservados.</p>
        <div class="flex justify-center gap-6 text-sm text-muted-foreground">
          <a href="#" class="hover:text-primary transition-smooth">Política de Privacidade</a>
          <a href="#" class="hover:text-primary transition-smooth">Termos de Uso</a>
          <a href="#" class="hover:text-primary transition-smooth">Atendimento</a>
        </div>
        <p class="mt-6 text-xs text-muted-foreground max-w-2xl mx-auto">*Este produto é um suplemento alimentar. Resultados podem variar conforme hábitos, biotipo e rotina do usuário. Utilize conforme orientação do rótulo.</p>
      </div>
    </div>
  </footer>
</main>

<?php get_footer(); ?>

