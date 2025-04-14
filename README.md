# Sistema de Locação de Veículos

Este projeto é um módulo de exibição de perfis para um sistema web que diferencia visualmente os **usuários comuns** dos **administradores**. As páginas são desenvolvidas em PHP com HTML e CSS integrados, e trazem funcionalidades básicas de visualização e gerenciamento de informações do perfil.

## 📁 Estrutura dos Arquivos

- `perfil_adm.php`  
  Página destinada à visualização do perfil do **administrador**. Contém opções adicionais para gerenciamento, como:
  - Botão para **editar perfil**
  - Acesso a funcionalidades administrativas
  - Exibição de dados completos do administrador

- `perfil_user.php`  
  Página de exibição do perfil de um **usuário comum**. Possui:
  - Exibição de dados pessoais básicos
  - Botão para edição do próprio perfil
  - Interface simplificada

## 🧰 Tecnologias Utilizadas

- **PHP** – Lógica de backend e renderização dinâmica
- **HTML5** – Estrutura semântica das páginas
- **CSS3** – Estilização e responsividade

## 🎨 Diferenciação Visual

Cada tipo de perfil possui um layout próprio para reforçar a diferença entre níveis de acesso no sistema:

| Recurso            | Usuário Comum (`perfil_user.php`) | Administrador (`perfil_adm.php`) |
|--------------------|------------------------------------|-----------------------------------|
| Exibição de dados  | ✅                                  | ✅                                 |
| Botão Editar       | ❌                                  | ✅                                 |
| Recursos Admin     | ❌                                  | ✅                                 |
| Layout personalizado | ✅                                | ✅                                 |
