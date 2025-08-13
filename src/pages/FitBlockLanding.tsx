import React from "react";
import { LandingButton } from "@/components/ui/landing-button";
import productImage from "@/assets/fit-block-product.jpg";
import heroWoman from "@/assets/hero-woman.jpg";
import testimonial1 from "@/assets/testimonial-1.jpg";
import testimonial2 from "@/assets/testimonial-2.jpg";
import testimonial3 from "@/assets/testimonial-3.jpg";

// Helper Components
const Container: React.FC<{ className?: string; children: React.ReactNode }> = ({ className = "", children }) => (
  <div className={`mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8 ${className}`}>{children}</div>
);

const SectionTitle: React.FC<{ kicker?: string; title: string; subtitle?: string; center?: boolean }>
= ({ kicker, title, subtitle, center = true }) => (
  <div className={`mb-12 ${center ? "text-center" : "text-left"}`}>
    {kicker && <p className="text-sm font-bold tracking-wider text-primary uppercase mb-3">{kicker}</p>}
    <h2 className="text-3xl sm:text-4xl lg:text-5xl font-bold text-foreground leading-tight">
      {title}
    </h2>
    {subtitle && <p className="mt-4 text-lg text-muted-foreground max-w-3xl mx-auto leading-relaxed">{subtitle}</p>}
  </div>
);

const Badge: React.FC<{ children: React.ReactNode; className?: string }>
= ({ children, className = "" }) => (
  <span className={`inline-block rounded-full bg-secondary text-secondary-foreground px-4 py-2 text-sm font-semibold ${className}`}>
    {children}
  </span>
);

const BenefitCard: React.FC<{ icon: string; title: string; desc: string }>
= ({ icon, title, desc }) => (
  <div className="group p-6 rounded-3xl bg-card shadow-sm border border-border hover:shadow-elegant transition-smooth">
    <div className="w-16 h-16 rounded-2xl bg-gradient-primary flex items-center justify-center text-2xl mb-4 group-hover:shadow-glow transition-smooth">
      {icon}
    </div>
    <h4 className="text-lg font-bold text-card-foreground mb-2">{title}</h4>
    <p className="text-sm text-muted-foreground leading-relaxed">{desc}</p>
  </div>
);

const TestimonialCard: React.FC<{ image: string; text: string; author: string }>
= ({ image, text, author }) => (
  <div className="rounded-3xl bg-card shadow-sm border border-border overflow-hidden hover:shadow-elegant transition-smooth">
    <div className="aspect-[4/5] bg-cover bg-center" style={{ backgroundImage: `url(${image})` }} />
    <div className="p-6">
      <p className="text-sm text-card-foreground leading-relaxed mb-3">"{text}"</p>
      <p className="text-xs text-muted-foreground font-semibold">{author}</p>
    </div>
  </div>
);

export default function FitBlockLanding() {
  const kits = [
    {
      name: "FIT BLOCK 30 dias",
      price: "R$ 129,00",
      oldPrice: "R$ 159,00",
      perks: ["1 frasco", "Tratamento de 30 dias", "Suporte por e-mail"],
      highlight: false,
    },
    {
      name: "KIT ECONÔMICO 90 dias",
      price: "R$ 297,00",
      oldPrice: "R$ 357,00",
      perks: ["3 frascos", "Tratamento de 90 dias", "Desconto exclusivo", "Frete com condições"],
      highlight: true,
      tag: "MAIS VENDIDO",
    },
    {
      name: "KIT TURBO 150 dias",
      price: "R$ 495,00",
      oldPrice: "R$ 595,00",
      perks: ["5 frascos", "Tratamento de 150 dias", "Maior desconto", "Frete grátis"],
      highlight: false,
    },
  ];

  const benefits = [
    { icon: "💧", title: "Ação Diurética", desc: "Auxilia a reduzir retenção de líquidos e inchaço" },
    { icon: "🔥", title: "Ação Termogênica", desc: "Acelera o metabolismo de forma natural" },
    { icon: "🍽️", title: "Bloqueio do Apetite", desc: "Promove saciedade e controla a fome" },
    { icon: "🌿", title: "100% Natural", desc: "Fórmula natural sem glúten e lactose" },
    { icon: "✅", title: "Certificações", desc: "FDA Approved e GMP Quality" },
    { icon: "⚡", title: "Resultados Rápidos", desc: "Primeiros resultados em semanas" },
  ];

  const faqs = [
    {
      q: "Como devo tomar o FIT BLOCK?",
      a: "Tome 1 cápsula ao dia, de preferência pela manhã e nunca em jejum. Beba bastante água e associe a uma alimentação equilibrada e atividade física.",
    },
    {
      q: "Em quanto tempo verei resultados?",
      a: "Os resultados variam de acordo com hábitos e biotipo. Em geral, clientes relatam melhora de saciedade e redução de inchaço nas primeiras semanas.",
    },
    {
      q: "Existe alguma contraindicação?",
      a: "Contraindicado para cardiopatas, gestantes, lactantes e menores de 18 anos. Não associar com bebidas alcoólicas ou medicamentos sem orientação profissional.",
    },
    {
      q: "O produto contém glúten ou lactose?",
      a: "Não. FIT BLOCK é livre de glúten e lactose.",
    },
    {
      q: "O FIT BLOCK é aprovado por órgãos reguladores?",
      a: "A cliente informa certificações como FDA Approved e GMP Quality. Consulte o rótulo do seu lote e, em caso de dúvidas, fale com nosso suporte.",
    },
  ];

  return (
    <div className="min-h-screen scroll-smooth bg-background text-foreground">
      {/* Fixed CTA Button */}
      <div className="fixed bottom-6 left-0 right-0 z-50 flex justify-center px-4 sm:hidden">
        <LandingButton href="#ofertas">QUERO EMAGRECER AGORA</LandingButton>
      </div>

      {/* HERO Section */}
      <section className="relative overflow-hidden bg-gradient-hero pt-20 pb-32">
        <div className="absolute inset-0 bg-gradient-to-br from-primary-glow/10 via-transparent to-primary-deep/10" />
        <Container className="relative">
          <div className="grid lg:grid-cols-2 gap-12 items-center">
            <div className="text-center lg:text-left">
              <Badge className="mb-6">Suplemento para Emagrecimento</Badge>
              <h1 className="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight text-primary-foreground mb-6">
                Transforme seu corpo com{" "}
                <span className="text-primary-glow">FIT BLOCK</span>
              </h1>
              <p className="text-lg sm:text-xl text-primary-foreground/90 mb-8 leading-relaxed max-w-2xl">
                Fórmula 100% natural com ação <strong>diurética</strong>, <strong>termogênica</strong> e <strong>bloqueadora de apetite</strong>,
                desenvolvida para potencializar seus resultados de forma segura e equilibrada.
              </p>
              
              <div className="grid sm:grid-cols-2 gap-4 mb-8 text-primary-foreground/80">
                <div className="flex items-center gap-3">
                  <span className="w-3 h-3 rounded-full bg-primary-glow"></span>
                  <span>Reduz retenção de líquidos</span>
                </div>
                <div className="flex items-center gap-3">
                  <span className="w-3 h-3 rounded-full bg-primary-glow"></span>
                  <span>Acelera o metabolismo</span>
                </div>
                <div className="flex items-center gap-3">
                  <span className="w-3 h-3 rounded-full bg-primary-glow"></span>
                  <span>Controla o apetite</span>
                </div>
                <div className="flex items-center gap-3">
                  <span className="w-3 h-3 rounded-full bg-primary-glow"></span>
                  <span>Sem glúten e lactose</span>
                </div>
              </div>

              <div className="flex flex-col sm:flex-row gap-4 mb-8">
                <LandingButton href="#ofertas" size="lg">QUERO EMAGRECER AGORA</LandingButton>
                <LandingButton variant="hero" href="#conheca">Como funciona</LandingButton>
              </div>

              <div className="flex flex-wrap gap-3">
                <Badge className="bg-primary-foreground/10 text-primary-foreground border-primary-foreground/20">FDA Approved</Badge>
                <Badge className="bg-primary-foreground/10 text-primary-foreground border-primary-foreground/20">GMP Quality</Badge>
                <Badge className="bg-primary-foreground/10 text-primary-foreground border-primary-foreground/20">100% Natural</Badge>
              </div>
            </div>

            <div className="relative">
              <div className="relative mx-auto w-full max-w-md">
                <img 
                  src={heroWoman} 
                  alt="Mulher confiante com FIT BLOCK" 
                  className="w-full h-auto rounded-3xl shadow-2xl"
                />
                <div className="absolute -top-6 -right-6 w-32 h-32 rounded-full bg-primary-foreground shadow-xl flex flex-col items-center justify-center text-center">
                  <p className="text-sm font-bold text-primary">Ação</p>
                  <p className="text-sm font-bold text-primary">Tripla</p>
                </div>
              </div>
            </div>
          </div>
        </Container>
      </section>

      {/* Social Proof Section */}
      <section className="py-20 bg-gradient-accent">
        <Container>
          <SectionTitle
            title="Se elas recomendam, pode confiar..."
            subtitle="Amiga, FIT BLOCK é para você!"
          />
          <div className="grid md:grid-cols-3 gap-8">
            <TestimonialCard 
              image={testimonial1}
              text="Me senti mais leve e com menos vontade de beliscar durante o dia."
              author="@maria_fitness"
            />
            <TestimonialCard 
              image={testimonial2}
              text="Incrível como consegui controlar meu apetite de forma natural."
              author="@ana_saude"
            />
            <TestimonialCard 
              image={testimonial3}
              text="Em poucas semanas já notei a diferença no meu corpo!"
              author="@julia_wellness"
            />
          </div>
        </Container>
      </section>

      {/* About Product */}
      <section id="conheca" className="py-24">
        <Container>
          <div className="grid lg:grid-cols-2 gap-16 items-center">
            <div>
              <SectionTitle
                title="Conheça o poder do FIT BLOCK!"
                subtitle="Uma solução natural que atua em múltiplas frentes para apoiar sua jornada de emagrecimento com equilíbrio e segurança."
                center={false}
              />
              <div className="mb-8">
                <img 
                  src={productImage} 
                  alt="Produto FIT BLOCK" 
                  className="w-full max-w-md mx-auto lg:mx-0 rounded-3xl shadow-elegant"
                />
              </div>
              <LandingButton href="#ofertas" size="lg">QUERO AGORA!</LandingButton>
            </div>
            
            <div className="grid sm:grid-cols-2 gap-6">
              <BenefitCard icon="🍊" title="Morosil®" desc="Ajuda a reduzir gordura abdominal e melhora o metabolismo." />
              <BenefitCard icon="🌿" title="Spirulina" desc="Fonte de proteína e antioxidantes que auxilia na saciedade." />
              <BenefitCard icon="🌾" title="Psyllium" desc="Fibras que promovem sensação de saciedade natural." />
              <BenefitCard icon="🌊" title="Fucus & Cavalinha" desc="Apoio diurético leve e sensação de leveza." />
              <BenefitCard icon="🍃" title="Sené & Cáscara" desc="Suporte natural ao trânsito intestinal." />
              <BenefitCard icon="🍆" title="Berinjela em pó" desc="Fibras que auxiliam no controle glicêmico." />
            </div>
          </div>
        </Container>
      </section>

      {/* Benefits Section */}
      <section className="py-20 bg-gradient-primary text-primary-foreground">
        <Container>
          <SectionTitle
            title="Conheça os benefícios do FIT BLOCK para você!"
            subtitle="Solução natural, sem glúten e sem lactose, com certificações e resultados surpreendentes."
          />
          <div className="grid grid-cols-2 md:grid-cols-3 gap-6 mb-12">
            {benefits.map((benefit, idx) => (
              <div key={idx} className="text-center p-6 rounded-2xl bg-primary-foreground/10 backdrop-blur-sm border border-primary-foreground/20">
                <div className="text-3xl mb-3">{benefit.icon}</div>
                <h4 className="font-bold mb-2">{benefit.title}</h4>
                <p className="text-sm text-primary-foreground/80">{benefit.desc}</p>
              </div>
            ))}
          </div>
          <div className="text-center">
            <LandingButton variant="hero" href="#ofertas" size="lg">QUERO EXPERIMENTAR O FIT BLOCK!</LandingButton>
          </div>
        </Container>
      </section>

      {/* Pricing Section */}
      <section id="ofertas" className="py-24 bg-gradient-accent">
        <Container>
          <SectionTitle 
            title="Escolha a melhor opção para você!"
            subtitle="Aproveite a promoção de lançamento por tempo limitado."
          />
          <div className="grid md:grid-cols-3 gap-8 mb-12">
            {kits.map((kit, idx) => (
              <div key={idx} className={`relative p-8 rounded-3xl shadow-elegant transition-smooth hover:shadow-glow ${
                kit.highlight ? "bg-gradient-primary text-primary-foreground scale-105" : "bg-card"
              }`}>
                {kit.tag && (
                  <span className="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-primary text-primary-foreground px-6 py-2 rounded-full text-sm font-bold shadow-lg">
                    {kit.tag}
                  </span>
                )}
                <div className="text-center mb-6">
                  <img src={productImage} alt="Produto" className="w-24 h-24 mx-auto object-contain mb-4" />
                  <h3 className="text-xl font-bold mb-2">{kit.name}</h3>
                  <p className={`text-sm line-through ${kit.highlight ? 'text-primary-foreground/70' : 'text-muted-foreground'}`}>
                    {kit.oldPrice}
                  </p>
                  <p className={`text-3xl font-bold ${kit.highlight ? 'text-primary-foreground' : 'text-primary'}`}>
                    {kit.price}
                  </p>
                </div>
                <ul className={`space-y-2 mb-6 ${kit.highlight ? 'text-primary-foreground/90' : 'text-muted-foreground'}`}>
                  {kit.perks.map((perk, i) => (
                    <li key={i} className="flex items-center gap-2">
                      <span className={`w-2 h-2 rounded-full ${kit.highlight ? 'bg-primary-foreground' : 'bg-primary'}`} />
                      {perk}
                    </li>
                  ))}
                </ul>
                <LandingButton 
                  variant={kit.highlight ? "hero" : "primary"} 
                  href="#checkout" 
                  className="w-full"
                >
                  COMPRAR AGORA
                </LandingButton>
              </div>
            ))}
          </div>
        </Container>
      </section>

      {/* FAQ Section */}
      <section className="py-20">
        <Container>
          <SectionTitle title="Perguntas Frequentes sobre o FIT BLOCK" />
          <div className="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            {faqs.map((faq, i) => (
              <div key={i} className="p-6 rounded-2xl bg-card border border-border shadow-sm">
                <h4 className="text-lg font-bold text-card-foreground mb-3">{faq.q}</h4>
                <p className="text-sm text-muted-foreground leading-relaxed">{faq.a}</p>
              </div>
            ))}
          </div>
        </Container>
      </section>

      {/* Footer */}
      <footer className="bg-muted py-12">
        <Container>
          <div className="text-center">
            <p className="text-sm text-muted-foreground mb-4">
              © {new Date().getFullYear()} FIT BLOCK — Todos os direitos reservados.
            </p>
            <div className="flex justify-center gap-6 text-sm text-muted-foreground">
              <a href="#" className="hover:text-primary transition-smooth">Política de Privacidade</a>
              <a href="#" className="hover:text-primary transition-smooth">Termos de Uso</a>
              <a href="#" className="hover:text-primary transition-smooth">Atendimento</a>
            </div>
            <p className="mt-6 text-xs text-muted-foreground max-w-2xl mx-auto">
              *Este produto é um suplemento alimentar. Resultados podem variar conforme hábitos, biotipo e rotina do usuário. Utilize conforme orientação do rótulo.
            </p>
          </div>
        </Container>
      </footer>
    </div>
  );
}