### Bonjour

Je suis étudiant en double licence **Numérique et Management** (MIASHS + Gestion, Université
Toulouse Capitole) et développeur freelance sous le nom [NFdev](https://www.nfdev.fr/). Je
développe des applications web full-stack, en m'intéressant surtout à ce qui relie le code aux
processus de l'entreprise : paiement, facturation, service après-vente, données clients,
reporting.

Je recherche actuellement deux choses. D'abord un **stage de 3 mois minimum**, obligatoire dans
ma double licence, entre le **3 mai et le 31 août 2027**. Ensuite une **alternance de deux ans
en Master MIAGE, parcours Ingénierie des Processus Métiers** (Toulouse Capitole), à partir de
**septembre 2027**, au rythme d'environ un mois à l'université et un mois en entreprise. Les deux
peuvent se faire dans la même entreprise : un stage qui se prolonge en alternance permet de
continuer sur les mêmes projets sans repartir de zéro.

Ma formation mêle les deux côtés de l'entreprise. Côté gestion : finance d'entreprise et
marchés, contrôle de gestion, achats et chaîne de valeur, marketing, gestion de projet. Côté
numérique : programmation (Java, web), bases de données, modélisation des processus métier,
business analytics et intelligence artificielle. Je suis donc ouvert à des missions variées :
développement, data, analyse et modélisation de processus, gestion de projet, ou des fonctions
plus orientées métier comme la finance.

## Projet principal : l'écosystème kbeauty

Tout part d'une boutique e-commerce de cosmétiques coréens **en production**. Pour apprendre
ce qu'elle ne couvrait pas (microservices, messagerie, NoSQL, CI/CD, observabilité), j'ai
construit autour d'elle des services séparés, qui échangent par RabbitMQ avec des contrats de
messages versionnés (JSON Schema).

| Dépôt | Rôle | Stack |
| --- | --- | --- |
| kbeauty-shop *(dépôt privé, boutique en production)* | Boutique : catalogue, panier, paiement Stripe, back-office | Laravel 13, Inertia, React, PostgreSQL |
| [kbeauty-ai-core-service](https://github.com/NF31/kbeauty-ai-core-service) | Diagnostic de peau par photo | Java, Spring Boot, RabbitMQ, Resilience4j |
| [kbeauty-ingredients-scraper](https://github.com/NF31/kbeauty-ingredients-scraper) | Collecte quotidienne des listes d'ingrédients | Python, Scrapy, Cassandra, Azure |
| [sav-ticketing-php](https://github.com/NF31/sav-ticketing-php) | Tickets SAV créés depuis les retours boutique | PHP natif, sans framework |
| [kbeauty-notifications-service](https://github.com/NF31/kbeauty-notifications-service) | Notifications transactionnelles | NestJS |
| [kbeauty-customer-mdm](https://github.com/NF31/kbeauty-customer-mdm) | Référentiel client unique (golden record) | Go |
| [kbeauty-ecosystem](https://github.com/NF31/kbeauty-ecosystem) | Infrastructure locale partagée et documentation | Docker Compose |

Chaque étape (choix techniques, difficultés rencontrées, solutions) est documentée dans
[kbeauty-ecosystem/docs/montee-competence](https://github.com/NF31/kbeauty-ecosystem/tree/main/docs/montee-competence).

## Autres projets

À côté de cet écosystème, j'ai réalisé des projets plus orientés métier :

- [**CarsSite**](https://github.com/NF31/CarsSite) : location de voitures. Réservation,
  paiement et remboursement Stripe, factures PDF, file d'e-mails (BullMQ), espace admin.
  Next.js, Prisma, PostgreSQL.
- [**esg-score-pme**](https://github.com/NF31/esg-score-pme) : diagnostic ESG/RSE pour PME.
  Scoring, comparaison sectorielle, export au format ESRS, pré-remplissage depuis un rapport
  PDF. FastAPI, Streamlit, PostgreSQL.
- [**Portfolio**](https://github.com/NF31/Portfolio) : mon site personnel avec back-office.
  Next.js, MongoDB.

## Ma façon de travailler

J'écris la documentation avant et pendant le code : besoin, modèle de données, architecture,
puis les difficultés rencontrées et leur solution. Chaque dépôt a sa CI (lint, tests, scan de
secrets avec gitleaks), et je suis titulaire de la certification SecNumAcadémie de l'ANSSI.
