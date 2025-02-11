<?php
    include_once("header.php");

    $equips = [
      "newepic" => [
        "nome" => "New Epic",
        "descricao" => "A linha de equipamentos de bateria de peso da Zest oferece soluções seguras e de alta qualidade para academias que buscam proporcionar aos seus clientes um treino eficaz e com máxima performance. Nossos equipamentos atendem a todos os grupos musculares, proporcionando uma variedade de opções que garantem segurança e conforto durante os exercícios. A Zest se compromete a fornecer produtos com recursos de fácil ajuste, estáveis e macios, com linha de força constante e sistema de solda passante, que proporcionam uma estrutura mais resistente, sempre com foco na durabilidade e nos melhores resultados para os praticantes e com design sofisticado que agrega valor ao seu negócio.",
        "equip" => [
          "abdominal" => [
            "nome" => "Abdominal",
            "img" => "abdominal.png",
            "desc" => "Seu design ergonômico garante maior conforto durante o movimento, minimizando o risco de lesões e otimizando os resultados. Com o 'Abdominal', sua academia oferece um treino focado, seguro e de alta performance, elevando a experiência do cliente e destacando seu espaço no mercado.",
          ],
          "abdutorAdutorDual" => [
            "nome" => "Abdutor/Adutor Dual",
            "img" => "adutor-e-abdutor.png",
            "desc" => "O 'Abdutor/Adutor Dual' é a escolha ideal para academias que buscam versatilidade e desempenho em um único equipamento. Com a capacidade de realizar dois exercícios em um, ele proporciona treinos completos e eficientes para a região interna e externa das coxas.",
          ],
            "extensor" => [
                "nome" => "Extensor",
                "img" => "extensor.png",
                "desc" => "Seu design ergonômico facilita o uso para todos os níveis de praticantes, proporcionando conforto, segurança e ótimos resultados. Invista nessa alternativa de um equipamento clássico para oferecer aos seus alunos uma experiência de treino inovadora e simplificada, elevando a qualidade e a eficiência da sua academia.",
            ],
            "flexorDeitado" => [
                "nome" => "Flexor Deitado",
                "img" => "flexor-deitado.png",
                "desc" => "Invista no 'Flexor Deitado' para oferecer aos seus alunos uma experiência de treino moderna, segura e de alta performance, destacando sua academia pela inovação e qualidade com equipamentos clássicos da musculação.",
            ],
            "flexorSentado" => [
                "nome" => "Flexor Sentado",
                "img" => "flexora-sentada.png",
                "desc" => "O design dessa máquina é utilizado para todos os níveis de praticantes, proporcionando conforto, segurança e ótimos resultados. Invista nessa alternativa de um equipamento clássico para oferecer aos seus alunos uma experiência de treino inovadora e simplificada, elevando a qualidade e a eficiência da sua academia.",
            ],
            "gluteo" => [
                "nome" => "Glúteo",
                "img" => "glúteo.png",
                "desc" => "É a solução perfeita para academias que buscam alavancar seus resultados com equipamentos modernos e eficientes. Projetado para otimizar o treino de glúteos e coxas, este aparelho oferece a combinação ideal de qualidade, durabilidade e facilidade de uso.",
            ],
            "graviton" => [
                "nome" => "Graviton",
                "img" => "graviton.png",
                "desc" => "A operação simples e intuitiva facilita o treino de todos os níveis de habilidade, permitindo que os alunos se concentrem no desempenho sem perder tempo com ajustes complexos. Com o 'Graviton', sua academia oferecerá um treino mais eficiente e seguro, elevando a experiência do cliente e impulsionando os resultados.",
            ],
            "legPressHorizontal" => [
                "nome" => "Leg Press Horizontal",
                "img" => "leg-press-horizontal.png",
                "desc" => "Este equipamento oferece uma execução suave e controlada, proporcionando um treino mais seguro e confortável, especialmente para quem busca minimizar o risco de lesões na região lombar. Sua tecnologia de bateria de peso garante ajustes rápidos e precisos, permitindo que praticantes de todos os níveis obtenham o máximo de desempenho.",
            ],
            "lombar" => [
                "nome" => "Lombar",
                "img" => "lombar.png",
                "desc" => "Ao investir no 'Lombar', sua academia oferece uma solução especializada para prevenção de lesões e melhoria da postura, promovendo saúde e bem-estar para seus clientes, e destacando sua marca como referência em qualidade e eficiência no fortalecimento muscular.",
            ],
            "panturrilha" => [
                "nome" => "Panturrilha",
                "img" => "panturrilha.png",
                "desc" => "O 'Panturrilha' é a solução ideal para academias que buscam oferecer treinos focados e eficientes para os músculos da panturrilha, elevando a qualidade do seu espaço e destacando sua academia pela excelência nos treinos de membros inferiores.",
            ],
            "peckDeckDorsalDual" => [
                "nome" => "Peckdeck/Dorsal Dual",
                "img" => "peck-deck-dorsal.png",
                "desc" => "O 'Peckdeck/Dorsal Dual' é um equipamento multifuncional que oferece a possibilidade de realizar dois exercícios distintos em uma única estação: o Peckdeck, direcionado ao fortalecimento do peitoral, e o exercício para a dorsal, focado no desenvolvimento das costas. Com um design compacto e otimizado, permite um aproveitamento eficiente do espaço, enquanto sua estrutura robusta assegura alta durabilidade e resistência.",
            ],
            "pullDown" => [
                "nome" => "Pull Down",
                "img" => "pull-down.png",
                "desc" => "Um equipamento essencial para academias, ideal para trabalhar a musculatura das costas, especialmente os dorsais, além de bíceps e trapézios. Com ajuste fácil de carga e design ergonômico, oferece movimentos suaves e seguros.",
            ],
            "pulleyRemadaDual" => [
              "nome" => "Pulley/Remada Dual",
              "img" => "pulley e remada.png",
              "desc" => "O 'Pulley/Remada Dual' é um equipamento multifuncional que combina a versatilidade do sistema de polias com a funcionalidade de uma estação de remada, permitindo treinos de costas, bíceps e ombros com diversos ajustes de carga e ângulos. Ideal para academias, oferece dois movimentos em um único aparelho, otimizando o uso do espaço e atendendo a diferentes necessidades de treinamento.",
          ],
          "pulley" => [
            "nome" => "Pulley",
            "img" => "pulley.png",
            "desc" => "O 'Pulley' é um equipamento essencial para academias, projetado para proporcionar exercícios de puxada eficazes, como remadas e trações, visando o fortalecimento das costas, bíceps e ombros. Com sistema de polias de alta qualidade e ajustes de carga precisos, oferece versatilidade e adapta-se a diferentes níveis de treino.",
        ],
        "remadaBaixa" => [
          "nome" => "Remada Baixa",
          "img" => "remada-baixa.png",
          "desc" => "Equipamento robusto e durável, projetado para suportar intenso uso diário em academias. Com estrutura de alta resistência e componentes de qualidade, garante longa vida útil, minimizando custos com manutenção. Sua ergonomia foi cuidadosamente desenvolvida para proporcionar conforto e segurança aos usuários, com ajuste fácil de carga e movimento fluido, ideal para treinos de costas e bíceps.",
      ],
      "remada" => [
        "nome" => "Remada",
        "img" => "remada.png",
        "desc" => "Excelente para treinos de força, proporcionando uma resistência controlada e permitindo variações de angulação e pegada. Oferece movimentos fluidos e seguros, permitindo aos alunos treinar com conforto e eficiência.",
    ],
    "scott" => [
      "nome" => "Scott",
      "img" => "scott.png",
      "desc" => "O equipamento de bateria de peso 'Scott' foi desenvolvido para proporcionar excelência em cada treino. Com materiais de alta qualidade e um design robusto, garante durabilidade e segurança, atendendo às demandas de academias modernas.",
  ],
  "supinoDesenvolvimentoDual" => [
    "nome" => "Supino/Desenvolvimento Dual",
    "img" => "supino-e-desenvolvimennot.png",
    "desc" => "O Supino/Desenvolvimento Dual é a solução ideal para academias que buscam oferecer versatilidade, segurança e alta performance aos seus alunos. Este equipamento permite a execução de diferentes exercícios, como supino reto e desenvolvimento de ombro, tudo em um único aparelho.",
],
"supino" => [
  "nome" => "Supino",
  "img" => "supinoo.png",
  "desc" => "O Supino da nossa linha é a escolha ideal para academias que buscam oferecer qualidade, segurança e performance aos seus alunos. Com uma estrutura robusta e materiais de alta resistência, este equipamento foi desenvolvido para suportar treinos intensos, garantindo durabilidade e baixo custo de manutenção. Sua versatilidade, com ajustes de altura, permite treinos personalizados para diferentes objetivos, desde o fortalecimento muscular até a hipertrofia.",
],
"desenvolvimento" => [
  "nome" => "Desenvolvimento",
  "img" => "desenvolvimento.png",
  "desc" => "Projetado para elevar o padrão de treino em sua academia, o equipamento de bateria de peso 'Desenvolvimento' combina qualidade superior com máxima eficiência. Seu design intuitivo e de fácil manuseio permite que os alunos aproveitem ao máximo cada sessão, sem complicação. A robustez e durabilidade do material asseguram um investimento que garante performance constante ao longo do tempo.",
],
"tricepsFrances" => [
  "nome" => "Tríceps Francês",
  "img" => "tríceps-frances.png",
  "desc" => "A máquina de tríceps francês, foi projetada para fortalecer os músculos do tríceps. O exercício é realizado com movimentos de extensão do cotovelo, visando o isolamento do tríceps. Esta máquina é ajustável em termos de carga e posicionamento do assento, proporcionando suporte e estabilidade durante o movimento, o que ajuda a minimizar o risco de lesões e melhora a eficácia do treino.",
],
"tricepsPressao" => [
  "nome" => "Tríceps Pressão",
  "img" => "tríceps.png",
  "desc" => "Essa máquina é ideal para executar o movimento de forma estável e segura, sendo uma excelente opção para diferentes níveis de experiência, além de ser eficiente para isolar o tríceps e evitar o uso excessivo de outros músculos.",
],
"voador" => [
  "nome" => "Voador",
  "img" => "voador.png",
  "desc" => "O 'Voador' é um equipamento de musculação projetado para trabalhar de forma eficaz o peitoral, oferecendo um movimento controlado e ergonômico para o fortalecimento da região torácica. Com estrutura robusta e ajustes de carga fáceis de manusear, proporciona segurança e conforto aos usuários.",
],
        ]
        
          ]
        
        ,

        "bravo" => [
        "nome" => "Bravo",
        "descricao" => "A linha de equipamentos articulados “Bravo” da Zest foi cuidadosamente desenvolvida para atender às necessidades de academias que buscam qualidade, segurança, design slim e sofisticado, proporcionando variação nos treinos dos seus alunos. Nossos produtos oferecem soluções completas para treinos de todos os grupos musculares, com opções adaptadas para diferentes níveis de habilidade, desde iniciantes até praticantes avançados. Com construção durável e tecnologia de ponta, garantimos conforto e eficiência, proporcionando uma experiência de treinamento segura e de alto desempenho para todos os públicos.",
        "equip" => [
          "abdominalCrunch" => [
            "nome" => "Abdominal Crunch",
            "img" => "abdominal crunch.png",
            "desc" => "A Abdominal Crunch é uma máquina essencial para o fortalecimento do core, ideal para usuários de todos os níveis.",
          ],
          "abdutorEmPéArticulado" => [
            "nome" => "Abdutor em Pé Articulado",
            "img" => "abdutor-em-pé.png",
            "desc" => "Variação de abdução que proporciona mais possibilidades de exercícios para os treinos de glúteo, ativando glúteo médio.",
          ],
            "abdutorArticulado " => [
              "nome" => "Abdutor Articulado",
              "img" => "abdutor articulado.png",
              "desc" => "O Abdutor Articulado é uma máquina eficaz para trabalhar os músculos abdutores de forma segura e confortável. Com biomecânicas que ativam todas as porções dos abdutores de glúteo.",
          ],
          "agachamentoPenduloArticulado" => [
              "nome" => "Agachamento Pêndulo Articulado",
              "img" => "agachamento-pendulo.png",
              "desc" => "Seu design pêndulo oferece estabilidade e conforto, permitindo aos usuários realizar o exercício com técnica correta, sem sobrecarregar a coluna. Ideal para academias que buscam diversificar as opções de treino de pernas.",
          ],
          "bancoSupinoRetoArticulado" => [
              "nome" => "Banco Supino Reto Articulado",
              "img" => "banco-supino-reto.png",
              "desc" => "Perfeito para academias que buscam atender a uma ampla variedade de clientes, o Banco Supino Reto Articulado oferece uma experiência de treino eficiente e de fácil adaptação, ideal para desenvolver volume nos músculos do peitoral e deltoides.",
          ],
          "beltSquat" => [
              "nome" => "Belt Squat",
              "img" => "belt-squat.png",
              "desc" => "Variação de agachamento que proporciona ativação dos músculos de quadríceps, adutores e do glúteo, com eficiência e segurança unidos em um design robusto e confortável de utilizar.",
          ],
          "bícepsArticulado" => [
              "nome" => "Bíceps Articulado",
              "img" => "bíceps-articulado.png",
              "desc" => "O Bíceps Articulado é uma máquina eficiente e adaptável, projetada para atender usuários de diferentes níveis de treinamento. Seu design ergonômico permite movimentos controlados e confortáveis.",
          ],
          "desenvolvimentoArticulado" => [
              "nome" => "Desenvolvimento Articulado",
              "img" => "desenvolvimento articulado.png",
              "desc" => "O Desenvolvimento Articulado é um equipamento essencial para o treino de peito, proporcionando resultados rápidos e eficazes. Seu design slim e compacto é ideal para otimizar o espaço da sua academia, mantendo a funcionalidade e o conforto durante o uso. Com movimento articulado, permite um ajuste preciso para trabalhar os músculos peitorais (principalmente o peitoral maior) e deltoides, garantindo um movimento fluido e seguro.",
          ],
          "elevaçãoLateralEmPéArticulada" => [
              "nome" => "Elevação Lateral em Pé Articulada",
              "img" => "elevação-lateral-articulada.png",
              "desc" => "Uma opção estável e de fácil uso para o exercício tradicional de elevação lateral para o músculo mais importante da abdução de ombros, ativando a porção lateral do deltoide.",
          ],
          "elevaçãoLateralArticulada" => [
              "nome" => "Elevação Lateral Articulada",
              "img" => "elevação-lateral.png",
              "desc" => "A Elevação Lateral Articulada é o equipamento ideal para aprimorar o treino de ombro e trapézio nas academias. Com um design ergonômico e movimento controlado, proporciona um trabalho isolado e eficiente do músculo deltóide, especialmente nas porções lateral e anterior.",
          ],
          "elevaçãoPélvicaArticulada" => [
            "nome" => "Elevação Pélvica Articulada",
            "img" => "elevação-pélvica.png",
            "desc" => "Possibilita o tradicional exercício de glúteos com praticidade e design compacto, com cinto regulável que possibilita uma execução eficiente, confortável e de fácil uso.",
        ],
        "extensorArticulado" => [
          "nome" => "Extensor Articulado",
          "img" => "extensor-articulado.png",
          "desc" => "O Extensor Articulado é ideal para o fortalecimento das pernas, oferecendo conforto segurança para usuários de todos os níveis. Permitindo personalizar o treino de acordo com as necessidades de iniciantes e avançados e trabalhando os músculos da porção do quadríceps.",
      ],
      "extensorUnilateralArticulado" => [
        "nome" => "Extensor Unilateral Articulado",
        "img" => "extensor-unilateral.png",
        "desc" => "Uma opção mais desafiadora do tradicional exercício de extensão de pernas, possibilitando maior concentração na ativação individual de cada quadríceps.",
    ],
    "flexorUnilateralArticulado" => [
      "nome" => "Flexor Unilateral Articulado",
      "img" => "flexor-em-pé-unilateral.png",
      "desc" => "O Flexor Unilateral Articulado oferece um treino eficiente e seguro para os músculos posteriores das pernas, trazendo mais variedade para o seu espaço de musculação.",
  ],
"flyArticulado" => [
  "nome" => "Fly Articulado",
  "img" => "fly-articulado.png",
  "desc" => "Oferece a praticidade de um treino de peitoral maior isolado, eficiente e sem a necessidade de pesos livres. Seu design ergonômico e articulado proporciona movimentos suaves e controlados, garantindo resultados consistentes com segurança.",
],
"flyEmPéArticulado" => [
"nome" => "Fly Em Pé Articulado",
"img" => "Fly-em-pé-articulado.png",
"desc" => "O Fly em Pé Articulado é uma máquina de musculação altamente versátil, ideal para usuários de todos os níveis. Seu design ergonômico e ajustável permite uma adaptação fácil ao movimento, garantindo conforto e eficácia no treino da porção inferior do peitoral.",
],
"remadaArticulada" => [
"nome" => "Remada Articulada",
"img" => "remada-articulada.png",
"desc" => "A Remada Articulada é uma máquina de musculação projetada para oferecer máxima eficiência e conforto durante o treino. Excelente opção para agregar valor ao seu espaço, proporcionando aos seus clientes uma experiência de treino premium com pegadas anatômicas, envolvendo os músculos latíssimo do dorso, trapézio, romboides, deltoide posterior e bíceps.",
],
"remadaInferiorArticulada" => [
"nome" => "Remada Inferior Articulada",
"img" => "remada-inferior.png",
"desc" => "A Remada Inferior Articulada é uma máquina de musculação que une design clean e eficiência no desempenho. Sua estrutura articulada garante um movimento suave e anatômico, proporcionando um treino eficaz para o fortalecimento dos músculos superiores das costas e posteriores do ombro. Com ajustes rápidos e intuitivos, oferece versatilidade para diferentes perfis de usuários, otimizando o tempo e maximizando os resultados.",
],
"remadaCavalinho" => [
"nome" => "Remada Cavalinho",
"img" => "remada-cavalinho.png",
"desc" => "A Remada Cavalinho oferece uma alternativa moderna e prática para um dos exercícios clássicos de academia, proporcionando excelente desempenho no fortalecimento das costas, ativando os músculos dorsais e dos braços. Com um design inovador, ela garante conforto e eficiência, permitindo movimentos mais fluidos e naturais. Sua estrutura robusta e compacta ocupa menos espaço, sendo ideal para academias que buscam otimizar seu layout sem abrir mão da qualidade.",
],
"remadaLowerBackArticulada" => [
"nome" => "Remada Lower Back Articulada",
"img" => "remada-lower-back.png",
"desc" => "A Remada Lower Back é uma alternativa diferenciada e altamente eficiente para o fortalecimento da região lombar e toda extensão das costas, ativando os músculos do core. Com um design ergonômico e funcional, ela permite um movimento controlado e seguro, focando no desenvolvimento muscular de forma precisa. Seu formato compacto e robusto oferece estabilidade durante o uso, tornando-se uma opção ideal para academias que buscam diversificar seus treinos e agregar mais opções de exercícios para seus clientes.",
],
"widePullDownArticulado" => [
  "nome" => "Wide Pull Down Articulado",
  "img" => "wide-pull-down-articulado.png",
  "desc" => "A máquina Wide Pull Down é a escolha perfeita para academias que buscam otimizar seu espaço com um equipamento de alto desempenho e fácil uso, elevando a experiência dos seus clientes nos treinos de membros superiores, recrutando músculos como latíssimo do dorso e deltoide posterior.",
],
"puxadaCircularArticulada" => [
"nome" => "Puxada Circular Articulada",
"img" => "puaxada-circular-articualda.png",
"desc" => "A Puxada Circular Articulada é uma máquina de musculação de alto desempenho, projetada para maximizar a eficácia dos treinos de grande dorsal, romboides e trapézio. Seu design inovador, com movimento circular articulado, permite uma execução fluida e natural, proporcionando maior amplitude e ativação muscular de forma segura.",
],
"puxadaSupinoArticuladoDual" => [
"nome" => "Puxada/Supino Articulado Dual",
"img" => "puxada-supino-articulado-dual.png",
"desc" => "Seu design articulado permite transições rápidas e suaves entre os exercícios, proporcionando uma experiência de treino fluida e eficiente. Com ajustes precisos e ergonomia aprimorada, a máquina garante conforto, segurança e máxima performance, atendendo a diferentes perfis de usuários. Ideal para academias que buscam otimizar seu espaço e oferecer uma solução prática e de alto desempenho, agregando em um único aparelho possibilidades de ativação de toda a porção do peitoral maior, serráteis e grande dorsal.",
],
"supinoDeclinadoArticulado" => [
"nome" => "Supino Declinado Articulado",
"img" => "supino-declinado.png",
"desc" => "O Supino Declinado Articulado é uma máquina de alta performance, ideal para o treino do peitoral inferior. Seu sistema articulado garante movimentos suaves e ajustes precisos, proporcionando conforto e estabilidade na execução do movimento.",
],
"supinoRetoArticulado" => [
"nome" => "Supino Reto Articulado",
"img" => "supino-reto-articulado.png",
"desc" => "A estrutura robusta garante firmeza durante o exercício, enquanto os ajustes simples e rápidos tornam o uso ainda mais prático. Ideal para academias que buscam oferecer uma experiência de treino confortável, com possibilidade de grandes cargas em exercícios para desenvolver o peitoral maior com potência e ativação de deltoide anterior.",
],
"supinoWideChestArticulado" => [
"nome" => "Supino Wide Chest Articulado",
"img" => "supino-wide-chest-articulado.png",
"desc" => "Uma variação eficiente dos exercícios que trabalham a porção mais larga de músculos do peitoral, trazendo mais variedade e opções para o seu negócio.",
],
"remadaCavalinho" => [
"nome" => "Remada Cavalinho",
"img" => "remada-cavalinho.png",
"desc" => "A Remada Cavalinho oferece uma alternativa moderna e prática para um dos exercícios clássicos de academia, proporcionando excelente desempenho no fortalecimento das costas, ativando os músculos dorsais e dos braços. Com um design inovador, ela garante conforto e eficiência, permitindo movimentos mais fluidos e naturais. Sua estrutura robusta e compacta ocupa menos espaço, sendo ideal para academias que buscam otimizar seu layout sem abrir mão da qualidade.",
],
"powerSmithArticulado" => [
"nome" => "Power Smith Articulado",
"img" => "power-smith.png",
"desc" => "Essa versão do supino conta com barras guiadas e traz a possibilidade de progressão de carga tranquila nos treinos de peitoral, com a praticidade de ser utilizado com o banco reto, inclinado e declinado.",
],
"legPress45" => [
  "nome" => "Leg Press 45º",
  "img" => "leg-press-45.png",
  "desc" => "O Leg Press 45 Articulado é uma máquina robusta e eficiente, ideal para o fortalecimento das pernas com total segurança.",
],
"legPressVertical" => [
  "nome" => "Leg Press Vertical",
  "img" => "leg-press-vertical.png",
  "desc" => "O Leg Press Vertical é ideal para o fortalecimento das pernas, em um nível mais desafiador.",
],
"hackSquat" => [
  "nome" => "Hack Squat",
  "img" => "hack-squat.png",
  "desc" => "Opção confortável e de alta durabilidade de um exercício altamente requisitado na musculação. Com travas de segurança e apoio de ombros confortáveis.",
],
"powerSquat" => [
  "nome" => "Power Squat",
  "img" => "power-squat.png",
  "desc" => "Possibilita os mesmos benefícios do agachamento livre, com mais estabilidade e segurança, oferecendo maiores possibilidades de progressão de carga e resultados eficientes.",
],
"legPressUnilateralArticulado" => [
  "nome" => "Leg Press Unilateral Articulado",
  "img" => "leg-press-unilateral-articulado.png",
  "desc" => "Possibilita os mesmos benefícios do agachamento livre, com mais estabilidade e segurança, oferecendo maiores possibilidades de progressão de carga e resultados eficientes.",
],
"vSquat" => [
  "nome" => "V-Squat",
  "img" => "V-squat.png",
  "desc" => "Possibilita os mesmos benefícios do agachamento livre, com mais estabilidade e segurança, oferecendo maiores possibilidades de progressão de carga e resultados eficientes.",
],
        ]
      ]
      
      ,

      "evo" => [
        "nome" => "Evo",
        "descricao" => "A linha de equipamentos articulados “Evo” da Zest oferece soluções diferenciadas e de alta qualidade para academias que buscam excelência em seu portfólio de máquinas de musculação. Com design robusto e elegante, nossos equipamentos foram desenvolvidos para atender a todos os grupos musculares, proporcionando um treino completo e eficaz. Adaptados para usuários de diferentes níveis, desde iniciantes até avançados, eles garantem conforto, segurança e alto desempenho.",
        "equip" => [
          "remadaArticulada" => [
            "nome" => "Remada Articulada",
            "img" => "remada-articulada-evo.png",
            "desc" => "Projetado com materiais resistentes e acabamento moderno, ideal para oferecer um treino eficiente e confortável. Seu design inovador permite uma movimentação fluida, proporcionando a ativação de músculos da região das costas, ombros e braços, como latíssimos, trapézio, romboides e bíceps. Ideal para academias que buscam oferecer aos alunos um treino completo e de qualidade.",
          ],
          "remadaInferiorArticulada" => [
            "nome" => "Remada Inferior Articulada",
            "img" => "remada-inferior (1).png",
            "desc" => "Seu mecanismo articulado garante um movimento fluido e eficiente, focando no trabalho de músculos como latíssimos, romboides, bíceps e músculos posteriores dos ombros. Ideal para academias que buscam oferecer aos seus alunos um exercício completo e de alta performance, garantindo durabilidade e conforto durante o treino.",
          ],
            "supinoRetoArticulado" => [
              "nome" => "Supino Reto Articulado",
              "img" => "supino-reto-articulado-evo.png",
              "desc" => "O supino reto articulado é o equipamento ideal para trabalhar peitoral maior e ombros. Com banco ajustável, oferece conforto e segurança, sendo perfeito para academias que buscam performance e durabilidade.",
          ],
          "supinoDeclinadoArticulado" => [
              "nome" => "Supino Declinado Articulado",
              "img" => "supino_declinado-articulado.png",
              "desc" => "Focado no trabalho do peitoral inferior, oferece um exercício eficiente e seguro. Com estabilidade e fácil adaptação para qualquer aluno.",
          ],
          "desenvolvimentoArticulado" => [
              "nome" => "Desenvolvimento Articulado",
              "img" => "desenvolvimento-articulado-evo.png",
              "desc" => "O desenvolvimento articulado é um equipamento de alta resistência, oferecendo conforto e durabilidade. Focado no trabalho dos ombros, especialmente os deltoides, proporciona um exercício seguro e eficiente.",
          ],
          "tricepsPressaoArticulado" => [
              "nome" => "Tríceps Pressão Articulado",
              "img" => "triceps-pressao-articulado.png",
              "desc" => "O Tríceps Pressão Articulado é um equipamento com design contemporâneo e ajuste ergonômico, garantindo conforto e resistência. Focado no desenvolvimento dos tríceps.",
          ],
          "bicepsArticulado" => [
              "nome" => "Bíceps Articulado",
              "img" => "bíceps-articulado-evo.png",
              "desc" => "Focado no desenvolvimento dos bíceps, também trabalha os antebraços, trazendo diversidade nas possibilidades de treinos de bíceps com praticidade.",
          ],
          "hackArticulado" => [
              "nome" => "Hack Articulado",
              "img" => "hack-articulado.png",
              "desc" => "Um exercício indispensável na musculação, para o trabalho de quadríceps, glúteos e posteriores. O Hack Articulado é uma opção segura e estável para os treinos de perna e que podem ser utilizados por alunos de todos os níveis de treinamento.",
          ],
          "legPressArticulado" => [
              "nome" => "Leg Press Articulado",
              "img" => "leg-press-articulado-evo.png",
              "desc" => "O Leg Press Articulado é um equipamento fabricado com materiais de alta resistência, garantindo durabilidade e facilidade para utilizar. Focado no fortalecimento dos músculos das pernas, especialmente quadríceps, glúteos e isquiotibiais, proporciona um treino seguro e eficaz. Complementando espaços de academias que buscam oferecer aos alunos exercícios completos e de alto desempenho, com equipamentos de alta qualidade e longa durabilidade.",
          ],
          "extensorArticulado" => [
              "nome" => "Extensor Articulado",
              "img" => "extensor-articulado-evo.png",
              "desc" => "Esse equipamento é ideal para academias que buscam otimizar o treino das pernas e trazer diferentes variações de exercícios comuns de academia, mantendo uma proposta moderna e diversificada.",
          ],
          "flexorUnilateralArticulado" => [
            "nome" => "Flexor Unilateral Articulado",
            "img" => "flexor-unilateral-articulado.png",
            "desc" => "Elaborado para trabalhar de forma isolada os músculos posteriores da coxa (isquiotibiais), com mais foco no trabalho individual de cada membro por vez, trazendo mais eficiência nos treinos, mas mantendo a estabilidade do corpo.",
        ],
        "gluteoArticulado" => [
          "nome" => "Glúteo Articulado",
          "img" => "glúteo_articulado.png",
          "desc" => "Ativa os músculos do glúteo máximo, com estabilidade de quadril e possibilitando treino completo de glúteo na musculação do seu empreendimento.",
      ],
        ]
      ]

      ,

      "bold" => [
        "nome" => "Bold",
        "descricao" => "Apresentamos nossa linha de acessórios de academia voltada para o treinamento em peso livre e musculação, projetada para oferecer máxima funcionalidade e praticidade no dia a dia das academias. Cada peça foi pensada para otimizar o espaço e proporcionar uma experiência de treino eficiente, segura e confortável. Com materiais resistentes e designs compactos, nossos equipamentos garantem durabilidade e agilidade, atendendo às necessidades de gestores que buscam soluções práticas e de alta performance para seus alunos. Ideal para maximizar os resultados e facilitar o fluxo de treino em ambientes de alta demanda.",
        "equip" => [
          "bancoSupinoReto" => [
            "nome" => "Banco Supino Reto",
            "img" => "supino-reto.png",
            "desc" => "O banco supino reto é um equipamento fundamental para qualquer academia que busque oferecer um treino completo e eficaz para seus alunos. Ele permite o desenvolvimento do peitoral maior, ombros e tríceps, sendo um dos principais exercícios para o fortalecimento e definição do tronco superior. Ao incluir o banco supino reto em sua academia, você oferece um exercício básico, mas extremamente eficiente, que atende tanto iniciantes quanto praticantes avançados.",
          ],
          "bancoSupinoInclinado" => [
            "nome" => "Banco Supino Inclinado",
            "img" => "supino-inclinado.png",
            "desc" => "O banco supino inclinado é um excelente aliado para o desenvolvimento muscular do tronco superior, com foco específico na parte superior do peitoral. A inclinação do banco proporciona um estímulo diferente do supino reto, ativando a porção clavicular do peitoral, essencial para quem busca um desenvolvimento equilibrado e completo da musculatura torácica. Adicionar o banco supino inclinado à sua academia oferece aos seus alunos a possibilidade de diversificar os treinos, garantindo ganhos mais equilibrados no peitoral.",
          ],
            "bancoSupinoDeclinado" => [
              "nome" => "Banco Supino Declinado",
              "img" => "supino-declinado (1).png",
              "desc" => "O banco supino declinado é ideal para trabalhar a parte inferior do peitoral, além de envolver os tríceps e a região anterior dos ombros. Com sua inclinação para baixo, este exercício permite uma ativação mais intensa da porção inferior do peitoral maior, proporcionando um desenvolvimento mais equilibrado e simétrico da musculatura do tronco. Ter um banco supino declinado em sua academia oferece aos alunos a oportunidade de focar em uma área frequentemente negligenciada, completando o treino de peitoral de forma eficaz.",
          ],
          "multiFlight" => [
              "nome" => "Multi Flight",
              "img" => "mult-flight.png",
              "desc" => "O Multi Flight é um equipamento versátil que o treinamento de diversos grupos musculares. Ele trabalha principalmente o peitoral, ombros, tríceps, além de ativar as costas e os músculos do core, dependendo da variação do exercício. Agregando ao seu espaço de musculação diferentes possibilidades no espaço de apenas um equipamento.",
          ],
          "panturrilhaSentada" => [
              "nome" => "Panturrilha Sentada",
              "img" => "panturrilha-sentada.png",
              "desc" => "Ao realizar essa variação de exercício sentado, há uma maior ativação do sóleo, permitindo um desenvolvimento equilibrado da panturrilha, especialmente em sua parte inferior. Com o equipamento de panturrilha sentada, sua academia oferece mais possibilidades para o desenvolvimento muscular completo.",
          ],
          "legPress45º" => [
              "nome" => "Leg Press 45º",
              "img" => "leg-press-45-bold.png",
              "desc" => "Com quatro suportes de carga, aumentando o nível de desafio desse exercício que é um dos mais eficazes para o treinamento de membros inferiores. Ele trabalha principalmente os quadríceps, glúteos e isquiotibiais sendo um dos equipamentos mais procurados nos espaços de musculação. O leg press 45 da Linha Bold traz conforto, segurança e baixa manutenção.",
          ],
          "crossOverAngular" => [
              "nome" => "CrossOver Angular",
              "img" => "cross-angular-2.png",
              "desc" => "Sua estrutura angular oferece uma amplitude de movimento aprimorada, permitindo treinos mais intensos e completos, além de ser mais compacto que o crossover convencional, otimizando seu espaço. Ideal para diversificar os treinos de seus alunos e trazer variação para sua academia, sendo um dos equipamentos mais adequados para atender as necessidades dos treinos.",
          ],
          "crossOver" => [
              "nome" => "CrossOver",
              "img" => "crossover.png",
              "desc" => "Sua estrutura robusta e design inteligente garantem movimentos suaves e controlados, proporcionando resultados superiores em força e definição muscular. Ter o Crossover em sua academia traz diversas vantagens: além de sua durabilidade, graças aos materiais de alta qualidade, ele oferece aos seus alunos uma experiência de treino segura e confortável. O equipamento atende a todos os níveis de treinamento, desde iniciantes até praticantes avançados, possibilitando exercícios funcionais e de isolamento.",
          ],
          "poliaSimples" => [
              "nome" => "Polia Simples",
              "img" => "polia-simples.png",
              "desc" => "Seu design funcional ocupa pouco espaço e, ao mesmo tempo, oferece enorme versatilidade, sua academia ganha um equipamento essencial, prático e eficiente para resultados consistentes.",
          ],
          "crossOverSmith" => [
              "nome" => "CrossOver Smith",
              "img" => "cross-smith.png",
              "desc" => "O Cross Smith é um equipamento inovador que combina a versatilidade de um Smith Machine com a liberdade de movimentos de um sistema de cabos, oferecendo dois aparelhos em um só. Com ele, seus alunos podem realizar exercícios de força com a barra guiada, como agachamentos, supinos e levantamento terra, ao mesmo tempo em que têm à disposição uma estação de cabos para exercícios como puxadas, extensões de tríceps e crucifixo.",
          ],
          "gaiolaAgachamento" => [
            "nome" => "Gaiola Agachamento",
            "img" => "gaiola-agachamento.png",
            "desc" => "Uma estrutura fundamental para realizar com segurança e praticidade alguns dos mais importantes exercícios de musculação. Ela permite a realização de agachamentos, levantamento terra e outros exercícios compostos com segurança, oferecendo suporte para movimentos pesados. Com apoio de barras com ajuste de altura, a gaiola proporciona estabilidade, reduzindo o risco de lesões e permitindo que os alunos se concentrem no desempenho.",
        ],
        "bancoScott" => [
          "nome" => "Banco Scott",
          "img" => "banco-scott.png",
          "desc" => "Equipamento especializado para o treino de bíceps, oferecendo um apoio que isola perfeitamente os músculos da parte superior dos braços, especialmente os bíceps braquiais. Sua estrutura permite um movimento controlado e eficiente, minimizando o uso de outras partes do corpo e maximizando a ativação do músculo alvo.",
      ],
      "paralela" => [
        "nome" => "Paralela",
        "img" => "paralela.png",
        "desc" => "Esse exercício é altamente eficaz para desenvolver força e massa muscular na parte superior do corpo, ativando principalmente os músculos peitorais maiores, tríceps e deltoides. Com design compacto e moderno.",
    ],
    "bancoLombar" => [
      "nome" => "Banco Lombar",
      "img" => "banco-lombar.png",
      "desc" => "Ter banco lombar em sua academia traz várias vantagens: além de ser um excelente aliado na prevenção de lesões lombares, ela também melhora a postura, a mobilidade e a performance em exercícios compostos como agachamentos e levantamento terra. Seu design seguro e eficaz atende a diferentes níveis de treino, sendo ideal para alunos que buscam fortalecer o core e a parte inferior das costas de forma eficiente.",
  ],
"bancoReto" => [
  "nome" => "Banco Reto",
  "img" => "banco-reto.png",
  "desc" => "Equipamento simples que permite a realização de diversos exercícios de peso livre, utilizado juntamente com halteres e dumbells, possibilitando a realização de diversos exercícios com praticidade e conforto.",
],
"banco90" => [
"nome" => "Banco 90ª",
"img" => "banco-90n.png",
"desc" => "Banco inclinado, utilizado principalmente em áreas de peso livre e para realização de exercícios de membros superiores, com design limpo e eficiência.",
],
"bancoAjustavel" => [
"nome" => "Banco Ajustável",
"img" => "banco-ajustável.png",
"desc" => "Com a possibilidade de ajustar o ângulo do banco, seus alunos podem trabalhar diferentes ativações dos músculos superiores, proporcionando maior diversidade de exercícios em um único equipamento. Seu design compacto e de alta qualidade garante durabilidade e conforto, enquanto a flexibilidade no ajuste dos ângulos permite que seus alunos realizem treinos mais completos e personalizados.",
],
"pranchaAbdominal" => [
"nome" => "Prancha Abdominal",
"img" => "prancha-abdominal.png",
"desc" => "A Prancha Abdominal é um equipamento essencial para fortalecer o core, trabalhando principalmente os músculos abdominais, oblíquos e região lombar. Com seu design ergonômico, ela proporciona uma execução de exercícios de forma confortável e segura, permitindo aos alunos focar na ativação muscular, sem sobrecarregar outras articulações.",
],
"bancoAbdominalTrainer" => [
"nome" => "Banco Abdominal Trainer",
"img" => "abdominal-trainer.png",
"desc" => "O Banco Abdominal Trainer é um equipamento projetado para otimizar o treino de abdômen, proporcionando maior conforto e suporte durante a execução de exercícios focados na região abdominal. Seu design ajustável permite que os alunos realizem movimentos controlados, trabalhando de forma eficiente os músculos abdominais, oblíquos e lombares.",
],
"tBar" => [
"nome" => "T-Bar",
"img" => "t-bar.png",
"desc" => "O T-Bar Trainer é um equipamento de alta performance, ideal para quem deseja fortalecer e desenvolver a musculatura das costas, ombros e peitorais. Com seu design inovador e movimento controlado, ele permite a execução de exercícios como remadas, promovendo um treino eficaz para a região superior do corpo, com foco especial no trapézio, latíssimos e romboides.",
],
"elevacaoPelvica" => [
  "nome" => "Elevação Pélvica",
  "img" => "elevacao-pelvaica.png",
  "desc" => "Opção confortável, prática e compacta para realizar o exercício de elevação pélvica, que é muito popular nos treinamentos de glúteos, sem necessidade de barras adicionais, steps ou bancos do peso livre.",
],
"bancoDeAlongamentos" => [
"nome" => "Banco de Alongamentos",
"img" => "banco-alongamentos.png",
"desc" => "Possibilita diferentes mobilidades para valorizar o espaço de alongamentos da sua academia, cuidando da saúde dos seus alunos e facilitando esse processo na rotina de alongamentos.",
],
"suporteBarras" => [
"nome" => "Suporte Barras",
"img" => "suporte-barras.png",
"desc" => "Solução para armazenamento de barras retas e barras w, tornando de fácil acesso o uso e organização do peso livre.",
],

        ]
      ]
      
      ,

      "boldpro" => [
        "nome" => "Bold Pro",
        "descricao" => "Nossa linha pro de acessórios de peso livre e musculação, desenvolvida para atender às necessidades dos gestores que buscam qualidade, funcionalidade e estética refinada. Os itens essências de musculação que componham essa linha são projetados com materiais de alta durabilidade e acabamento impecável, garantindo não apenas performance superior, mas também um ambiente de treino mais sofisticado e elegante.",
        "equip" => [
          "bancoSupinoRetoPro" => [
            "nome" => "Banco Supino Reto",
            "img" => "banco-supino-rero-pro.png",
            "desc" => "O Banco Supino Reto da linha Bold Pro é a escolha ideal para gestores que buscam qualidade, performance e estética em seus espaços de treinamento. Com um design moderno e sofisticado, este equipamento se destaca pela sua estrutura robusta e acabamento refinado. Um exercício essencial que trabalha principalmente os músculos do peitoral maior, tríceps e deltoides anteriores.",
          ],
          "bancoSupinoInclinadoPro" => [
            "nome" => "Banco Supino Inclinado",
            "img" => "banco-supino-inclinado-pro.png",
            "desc" => "Ideal para o trabalho do peitoral superior, deltoides anteriores e tríceps, proporciona a postura correta e resultados eficientes, completando os treinos de superiores com modernidade e praticidade.",
          ],
            "bancoSupinoDeclinadoPro" => [
              "nome" => "Banco Supino Declinado",
              "img" => "banco-supino-declinado-pro.png",
              "desc" => "Oferece aos seus clientes uma experiência de treino de alto nível, combinando estilo e desempenho, ativação de peitoral inferior e resultados.",
          ],
          "bancoDesenvolvimento" => [
              "nome" => "Banco Desenvolvimento",
              "img" => "banco-desenvolvimento-pro.png",
              "desc" => "Este equipamento ativa principalmente os músculos do peitoral, tríceps e ombro, sendo essencial para um treino completo de parte superior. Uma excelente escolha para academias que buscam qualidade, funcionalidade e estética em seus aparelhos, além da praticidade.",
          ],
          "panturrilhaSentadaPro" => [
              "nome" => "Panturrilha Sentada",
              "img" => "panturrilha-sentada-pro.png",
              "desc" => "Apresenta um design moderno e clean, oferecendo conforto e eficiência aos usuários. Com ajuste fácil e estrutura robusta, permite a execução do exercício de forma segura e eficaz. Este aparelho foca no fortalecimento dos músculos da panturrilha, ativando especialmente o sóleo. Ideal para academias que buscam agregar valor ao treino de membros inferiores com um equipamento de alto desempenho e estética refinada.",
          ],
          "legPress45ºPro" => [
              "nome" => "Leg Press 45º",
              "img" => "Leg-press-45-pro.png",
              "desc" => "Com quatro suportes de carga, aumentando o nível de desafio desse exercício que é um dos mais eficazes para o treinamento de membros inferiores. Ele trabalha principalmente os quadríceps, glúteos e isquiotibiais sendo um dos equipamentos mais procurados nos espaços de musculação. O leg press 45 da Linha Bold traz conforto, segurança e baixa manutenção.",
          ],
          "superSquat" => [
              "nome" => "Super Squat",
              "img" => "Super-Squat.png",
              "desc" => "Projetado para oferecer conforto e segurança aos usuários, garante uma execução precisa do exercício. Ideal para ativar os músculos das coxas, glúteos e quadris, esse equipamento é perfeito para um treino intenso de membros inferiores. Uma excelente opção para academias que buscam oferecer qualidade, eficiência e um visual contemporâneo em seus aparelhos.",
          ],
          "hackSquat" => [
              "nome" => "Hack Squat",
              "img" => "hack.png",
              "desc" => "Proporcionando um treino eficaz de coxas e glúteos, desempenho e estética, é um equipamento indispensável nos espaços de musculação e que com a linha Bold Pro, disponibiliza estabilidade, conforto e modernidade para a realização desse exercício.",
          ],
          "smith" => [
              "nome" => "Smith",
              "img" => "smith.png",
              "desc" => "Ideal para uma ampla variedade de exercícios, proporciona ajustes confortáveis e design característico da linha. Traz para o espaço de musculação diversas possibilidades de exercícios com o necessário para uma boa execução.",
          ],
          "gaiolaAgachamento" => [
              "nome" => "Gaiola Agachamento",
              "img" => "gaiola-agachametno.png",
              "desc" => "A 'Gaiola de Agachamento' possui design moderno e clean, oferecendo segurança e robustez. Ideal para agachamentos e levantamento terra, ativa quadríceps, glúteos, isquiotibiais e core. Perfeita para academias que buscam versatilidade, segurança e um visual sofisticado.",
          ],
          "elevacaoPelvica" => [
            "nome" => "Elevação Pélvica",
            "img" => "elevação-pélvica-pro.png",
            "desc" => "Proporciona a experiência de realizar o exercício de elevação pélvica com conforto, estabilidade e estrutura compacta, gerando praticidade com o sistema de cinto ajustável e apoios de costa e plataforma de pés.",
        ],
        "crossOverAngular" => [
          "nome" => "CrossOver Angular",
          "img" => "crossover-angular.png",
          "desc" => "Ideal para academias que buscam oferecer versatilidade, alta performance e um visual contemporâneo em seus aparelhos.",
      ],
      "crossover" => [
        "nome" => "CrossOver",
        "img" => "crossover-pro.png",
        "desc" => "O 'Crossover' apresenta um design clean e moderno, com estrutura sólida e ajustes fáceis. Perfeito para exercícios diversos, trabalha intensamente diferentes músculos do corpo. Oferece treinos versáteis e visual sofisticado.",
    ],
    "crossSmith" => [
      "nome" => "CrossSmith",
      "img" => "cross-smith-pro.png",
      "desc" => "O 'Cross Smith' combina um design moderno e clean com alta funcionalidade, oferecendo segurança e estabilidade nos movimentos. Ideal para exercícios como supino, agachamentos e levantamento de ombros, ativa músculos do peito, ombros, quadríceps e tríceps.",
  ],
"smithComGuiaDupla" => [
  "nome" => "Smith com Guia Dupla",
  "img" => "smith guia dupla.png",
  "desc" => "O 'Smith com Guia Dupla' oferece praticidade e um design cuidadosamente elaborado, garantindo eficiência e segurança em cada movimento. Sua estrutura robusta e ajustes precisos tornam os exercícios mais seguros, ideais para trabalhar músculos diversos do corpo.",
],
"bancoScott" => [
"nome" => "Banco Scott",
"img" => "banco-scott-pro.png",
"desc" => "É ideal para isolar os bíceps, permitindo um trabalho focado e seguro, com praticidade no espaço de peso livre das academias.",
],
"paralela" => [
"nome" => "Paralela",
"img" => "paralela-pro.png",
"desc" => "A 'Paralela' é um equipamento versátil, ideal para exercícios como dips, flexões de braço e trabalho de tríceps. Seu design eficiente e robusto oferece estabilidade e conforto, permitindo um treino seguro e focado. Ter uma paralela na academia é uma excelente vantagem, pois amplia as opções de treino para membros superiores, além de ser compacta e fácil de usar.",
],
"bancoLombar" => [
"nome" => "Banco Lombar",
"img" => "banco-lombar-pro.png",
"desc" => "Focando no fortalecimento da região lombar e core. Com design ergonômico e estrutura robusta, oferece conforto e segurança durante o treino. Ter esse equipamento na academia é uma grande vantagem, pois ajuda a prevenir lesões e melhora a postura, além de ser essencial para um treino completo de membros inferiores e região central.",
],
"bancoReto" => [
"nome" => "Banco Reto",
"img" => "banco-reto-pro.png",
"desc" => "Variação com design mais moderno de um acessório indispensável nos espaços de peso livre das academias.",
],
"banco90ªPro" => [
"nome" => "Banco 90ª",
"img" => "banco-90-pro.png",
"desc" => "Ideal para exercícios como supino inclinado, flys e desenvolvimento de ombro com peso livre.",
],
"bancoAjustavel" => [
  "nome" => "Banco Ajustável",
  "img" => "banco-ajustável.png",
  "desc" => "Seguro e ajustável para diferentes variações de exercícios, proporcionando praticidade e conforto aos usuários.",
],
"pranchaAbdominalAjustavel" => [
"nome" => "Prancha Abdominal Ajustavel",
"img" => "prancha-abdominal-ajustável.png",
"desc" => "Possibilita a realização de exercícios como pranchas, abdominais e flexões de tronco de maneira prática e intuitiva.",
],
"agachamentoSissy" => [
"nome" => "Agachamento Sissy",
"img" => "sissy--].png",
"desc" => "Equipamento focado em trabalhar os músculos das pernas e glúteos, ideal para exercícios como agachamentos profundos e flexões de quadril. Seu design robusto e ajustável oferece segurança e conforto durante o treino.",
],
"ghd" => [
"nome" => "GHD",
"img" => "ghd.png",
"desc" => "O 'GHD' (Glute Ham Developer) é ideal para exercícios como extensões de lombar, flexões de pernas e trabalho de glúteos. Trazendo variação nos exercícios desses grupos musculares.",
],
"suporteDeDumbells15Pares" => [
"nome" => "Suporte de Dumbells 15 Pares",
"img" => "suporte-15-pares-dumbbells.png",
"desc" => "Suporte com design característico da linha Bold pro, comporta 15 pares de dumbells.",
],
"suporteDeDumbells10Pares" => [
"nome" => "Suporte de Dumbells 10 Pares",
"img" => "suporte-10-pares-dumbbelss.png",
"desc" => "Suporte com design característico da linha Bold pro, comporta 10 pares de dumbells.",
],
"suporteDeBarras" => [
"nome" => "Suporte de Barras",
"img" => "suporte-barras-pro.png",
"desc" => "Acessório para comportar barras W e retas.",
],
"suporteDeAnilhas" => [
"nome" => "Suporte de Anilhas",
"img" => "suporte-para-anilha-pro.png",
"desc" => "Organizador de anilhas com design clean e estrutura robusta.",
],
"bancoDeAlongamentos" => [
"nome" => "Banco de Alongamentos",
"img" => "banco-alongamentos-pro.png",
"desc" => "Possibilita ao usuário uma sequencia completa de alongamentos de forma intuitiva.",
],
"barraH" => [
"nome" => "Barra H",
"img" => "barra-H.png",
"desc" => "A 'Barra H' é perfeita para exercícios como remadas, puxadas e exercícios para ombros e tríceps. Seu design robusto oferece estabilidade e conforto, permitindo um treino eficaz e seguro.",
],

        ]
      ]
      
      ,

      "cardio" => [
        "nome" => "Cardio",
        "descricao" => "Contamos com uma ampla gama de aparelhos, incluindo esteiras, escadas, bicicletas horizontais, bicicletas verticais, bicicletas de spinning e airbikes. Todos projetados para oferecer conforto e desempenho superior. Nossos equipamentos se destacam pela facilidade de ajuste e regulagens, permitindo que cada usuário personalize seu treino de acordo com suas necessidades e objetivos, com a variedade de opções que garantem resultados eficientes, atendendo necessidades individuais. A Zest combina inovação, funcionalidade e qualidade para atender a todos os perfis de treino, desde iniciantes até atletas avançados.",
        "equip" => [
          "itemCardio" => [
            "nome" => "Item Cardio",
            "img" => "cardio.png",
            "desc" => "Descrição Cardio",
          ],
          "itemCardio2" => [
            "nome" => "Item Cardio",
            "img" => "cardio.png",
            "desc" => "Descrição Cardio",
          ],
          "itemCardio3" => [
            "nome" => "Item Cardio",
            "img" => "cardio.png",
            "desc" => "Descrição Cardio",
          ],
          "itemCardio4" => [
            "nome" => "Item Cardio",
            "img" => "cardio.png",
            "desc" => "Descrição Cardio",
          ],

          ]
          ]
          
          ,

          ];
          $equip = $equips[$_GET["equip"]];
          $linha = $equip["nome"];
?>
<!-- equipamentos -->
  <section id="service">
    <div class="container">
      <h5 class="section-subheading" data-aos="fade-up">Equipamentos</h5>
      <h2 class="section-heading" data-aos="fade-up" data-aos-delay="100">
        <?= $linha; ?>
      </h2>
      <section id="newepic"></section>
      <p><?= $equip["descricao"] ?></p>
      <br><br><br><br>
      <div class="services">
        
        <!-- equipamentos -->
        

          <?php
          
            foreach($equip["equip"] as $i => $val){
?>
<div class="service" id="<?= $i?>" class="machine" data-name="Abdominal" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700"
          data-aos-easing="ease-out-quart">
          <h3 class="services__title"><?= $val["nome"]; ?></h3>
              <img src="equipamentos/img/<?= $val["img"]; ?>" alt="" class="">
              
              <p class="project__text">
              <?= $val["desc"]; ?>
          </p>
          <a href="addcar.php?item=<?= $val["nome"]; ?>&linha=<?= $linha; ?>&img=<?= $val["img"]; ?>" class="add-to-cart-btn">Adicionar ao Orçamento</a>
          </div>
<?php
            }
          ?>

        </section>
        <?php
          include_once("footer.php");
        ?>