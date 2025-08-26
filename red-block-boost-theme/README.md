## Red Block Boost Theme

Standalone WordPress theme converted from React + TypeScript + Tailwind + shadcn-ui. Fully responsive and Elementor-ready.

### Requisitos
- WordPress 6.0+
- PHP 7.4+
- Plugins:
  - Elementor
  - Elementor Pro (opcional para Theme Builder)
  - Advanced Custom Fields (opcional para campos kits/depoimentos)

### Instalação
1. Faça upload do arquivo `red-block-boost-theme.zip` em Aparência > Temas > Adicionar novo > Enviar tema.
2. Ative o tema.
3. Ative os plugins recomendados.
4. (Opcional) Importe o template Elementor em Modelos > Ferramentas > Importar (`docs/fitblock-elementor-template.json`).

### Conteúdo inicial
- A página inicial é renderizada por `front-page.php` e replica 100% o layout.
- As imagens estão em `assets/images`.
- O CSS gerado do Tailwind está em `assets/css/tailwind.css`.

### Customização
- Use Elementor para criar cabeçalho/rodapé personalizados (o tema registra locations `header` e `footer`).
- Use ACF para gerenciar kits, FAQs e depoimentos via CPTs (`Kits`, `FAQs`, `Testimonials`).

### Performance
- CSS/JS minificados, lazy loading padrão do WordPress habilitado.
- Substitua imagens por versões otimizadas se necessário.

### Suporte
Importe o JSON do Elementor e edite pelo construtor. Para ajustes de estilo, adicione regras em `style.css` ou um plugin de CSS adicional.

