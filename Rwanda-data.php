<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form - Urega, Uregwa, Ikirego</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            padding-top: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-navigation {
            display: flex;
            justify-content: space-between;
        }

        .section {
            display: none;
        }

        .section.active {
            display: block;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Location & Concern Submission</h2>

        <!-- Step 1: Urega -->
        <div id="step1" class="section active">
            <h3>Step 1: Urega</h3>

            <!-- Province -->
            <div class="mb-3">
                <label for="uregaProvince" class="form-label">Select Province:</label>
                <select class="form-select" id="uregaProvince" onchange="populateDistricts('urega')">
                    <option value="">Select Province</option>
                </select>
            </div>

            <!-- District and Sector -->
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="uregaDistrict" class="form-label">Select District:</label>
                    <select class="form-select" id="uregaDistrict" onchange="populateSectors('urega')">
                        <option value="">Select District</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="uregaSector" class="form-label">Select Sector:</label>
                    <select class="form-select" id="uregaSector" onchange="populateCells('urega')">
                        <option value="">Select Sector</option>
                    </select>
                </div>
            </div>

            <!-- Cell and Village -->
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="uregaCell" class="form-label">Select Cell:</label>
                    <select class="form-select" id="uregaCell" onchange="populateVillages('urega')">
                        <option value="">Select Cell</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="uregaVillage" class="form-label">Select Village:</label>
                    <select class="form-select" id="uregaVillage">
                        <option value="">Select Village</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Step 2: Uregwa -->
        <div id="step2" class="section">
            <h3>Step 2: Uregwa</h3>

            <!-- Province -->
            <div class="mb-3">
                <label for="uregwaProvince" class="form-label">Select Province:</label>
                <select class="form-select" id="uregwaProvince" onchange="populateDistricts('uregwa')">
                    <option value="">Select Province</option>
                </select>
            </div>

            <!-- District and Sector -->
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="uregwaDistrict" class="form-label">Select District:</label>
                    <select class="form-select" id="uregwaDistrict" onchange="populateSectors('uregwa')">
                        <option value="">Select District</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="uregwaSector" class="form-label">Select Sector:</label>
                    <select class="form-select" id="uregwaSector" onchange="populateCells('uregwa')">
                        <option value="">Select Sector</option>
                    </select>
                </div>
            </div>

            <!-- Cell and Village -->
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="uregwaCell" class="form-label">Select Cell:</label>
                    <select class="form-select" id="uregwaCell" onchange="populateVillages('uregwa')">
                        <option value="">Select Cell</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="uregwaVillage" class="form-label">Select Village:</label>
                    <select class="form-select" id="uregwaVillage">
                        <option value="">Select Village</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Step 3: Ikirego -->
        <div id="step3" class="section">
            <h3>Step 3: Ikirego</h3>
            <div class="mb-3">
                <label for="ikiregoText" class="form-label">Please describe your concern:</label>
                <textarea class="form-control" id="ikiregoText" rows="5" placeholder="Enter your concern here..."></textarea>
            </div>
            <button class="btn btn-success" type="submit" onclick="submitForm(event)">Submit</button>
        </div>

        <!-- Navigation Buttons -->
        <div class="form-navigation">
            <button class="btn btn-secondary" id="prevBtn" onclick="navigateForm(-1)" style="display: none;">Previous</button>
            <button class="btn btn-primary" id="nextBtn" onclick="navigateForm(1)">Next</button>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

     <script>
  const data = [
    {
      "type": "PROVINCE",
      "name": "East",
      "districts": [
        {
          "type": "DISTRICT",
          "name": "Bugesera",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Gashora",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Biryogo",
                  "villages": [
                    "Bidudu",
                    "Biryogo",
                    "Buhoro",
                    "Gihanama",
                    "Kagarama",
                    "Kanyonyomba",
                    "Karutete",
                    "Kivugiza",
                    "Rugunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuye",
                  "villages": [
                    "Bidudu",
                    "Kabuye",
                    "Karizinge",
                    "Rwagasiga",
                    "Rweteto"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagomasi",
                  "villages": [
                    "Akagako",
                    "Kagomasi",
                    "Kiruhura",
                    "Kuruganda",
                    "Runzenze",
                    "Rushubi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwendo",
                  "villages": [
                    "Gaharwa",
                    "Gisenyi",
                    "Kayovu",
                    "Ruhanga",
                    "Ruhanura",
                    "Rutanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ramiro",
                  "villages": [
                    "Dihiro",
                    "Kagasa I",
                    "Kagasa II",
                    "Karusine I",
                    "Karusine II",
                    "Migina",
                    "Munyinya",
                    "Rweru I",
                    "Rweru II"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Juru",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Juru",
                  "villages": [
                    "Ayabakiza",
                    "Bisagara",
                    "Nyamigende",
                    "Rugarama",
                    "Rwamakara",
                    "Twabagarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabukuba",
                  "villages": [
                    "Gikana",
                    "Gikurazo",
                    "Kabukuba",
                    "Kamatongo",
                    "Majanja",
                    "Mbuye",
                    "Rushubi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mugorore",
                  "villages": [
                    "Cyirabo",
                    "Gatora",
                    "Kajevuba",
                    "Mugorore",
                    "Murambi",
                    "Rebero",
                    "Rwamurama",
                    "Tabarari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musovu",
                  "villages": [
                    "Bitega",
                    "Cyabasonga",
                    "Cyingaju",
                    "Kabeza",
                    "Nyaruhuru"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwinume",
                  "villages": [
                    "Gisororo",
                    "Kabeza",
                    "Katarara",
                    "Kinihira",
                    "Rwimpyisi",
                    "Uwimpunga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kamabuye",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Biharagu",
                  "villages": [
                    "Akanigo",
                    "Biharagu",
                    "Kanyonyera",
                    "Munazi",
                    "Muyigi",
                    "Nyarurama",
                    "Rubugu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Burenge",
                  "villages": [
                    "Akabazeyi",
                    "Kagenge",
                    "Murambo",
                    "Nyabyondo",
                    "Nyakariba",
                    "Rebero",
                    "Senga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kampeka",
                  "villages": [
                    "Byimana",
                    "Kampeka",
                    "Mabuye",
                    "Masangano",
                    "Mbuganzeri",
                    "Mparo",
                    "Ndama",
                    "Pamba I",
                    "Pamba II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakayaga",
                  "villages": [
                    "Akaje",
                    "Fatinkanda",
                    "Murago",
                    "Murambi",
                    "Ntungamo I",
                    "Ntungamo II",
                    "Nyakayaga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Tunda",
                  "villages": [
                    "Cyogamuyaga",
                    "Mububa I",
                    "Mububaya II",
                    "Rubirizi",
                    "Rusibya",
                    "Tunda",
                    "Twuruziramire",
                    "Uwibiraro I",
                    "Uwibiraro II",
                    "Uwumusave"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mareba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bushenyi",
                  "villages": [
                    "Bigaga",
                    "Bukumba",
                    "Cyantwari",
                    "Gasagara",
                    "Gitega",
                    "Kabeza",
                    "Kagese",
                    "Kagogo",
                    "Kamasonga",
                    "Mareba",
                    "Muyange",
                    "Rukoyoyo",
                    "Runyonza",
                    "Rususa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gakomeye",
                  "villages": [
                    "Gatanga",
                    "Gitwa",
                    "Kabere",
                    "Kajevuba",
                    "Kamudeberi",
                    "Kamunana",
                    "Kanka",
                    "Kaziranyenzi",
                    "Rwintare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamigina",
                  "villages": [
                    "Gafunzo",
                    "Kabeza",
                    "Kabingo",
                    "Kabuye",
                    "Karwana",
                    "Ngugu",
                    "Nyamigisha",
                    "Ruhina",
                    "Rusenyi",
                    "Ruyenzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rango",
                  "villages": [
                    "Gatare",
                    "Gatinza",
                    "Gihoko",
                    "Kabuga",
                    "Kagarama",
                    "Matinza",
                    "Mbuga",
                    "Rango",
                    "Rusagara",
                    "Rwabikwano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugarama",
                  "villages": [
                    "Gasagara",
                    "Gatare",
                    "Kayonza",
                    "Keza",
                    "Kururama",
                    "Muyenzi",
                    "Ruduha",
                    "Rugarama",
                    "Rutaka"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mayange",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gakamba",
                  "villages": [
                    "Gacucu",
                    "Gakamba",
                    "Gisenyi",
                    "Kamugenzi",
                    "Karambo",
                    "Kavumu",
                    "Rukora"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagenge",
                  "villages": [
                    "Biryogo",
                    "Gakindo",
                    "Gitaramuka",
                    "Karama",
                    "Kiruhura",
                    "Remera",
                    "Rukindo",
                    "Taba",
                    "Tetero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibenga",
                  "villages": [
                    "Gahwiji I",
                    "Gahwiji II",
                    "Kindonyi",
                    "Murambi",
                    "Ruhorobero",
                    "Rwakaramira",
                    "Rwarusaku"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibirizi",
                  "villages": [
                    "Gacyamo",
                    "Gahinga",
                    "Gisenyi",
                    "Gitera",
                    "Kibirizi",
                    "Rugazi",
                    "Rwakibirizi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbyo",
                  "villages": [
                    "Cyaruhiririra",
                    "Kabyo",
                    "Rugarama",
                    "Rwimikoni I",
                    "Rwimikoni II"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Musenyi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gicaca",
                  "villages": [
                    "Bidudu",
                    "Cyanika",
                    "Cyarubazi",
                    "Gatare",
                    "Gihari",
                    "Kagusa",
                    "Kamahango",
                    "Kavumu",
                    "Kidudu",
                    "Migina",
                    "Ngarama",
                    "Remera",
                    "Rusagara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musenyi",
                  "villages": [
                    "Bidudu",
                    "Bishinge",
                    "Bizenga",
                    "Cyeru",
                    "Gakomeye",
                    "Gakurazo",
                    "Kigarama",
                    "Kijuri",
                    "Kiringa",
                    "Muhanga",
                    "Nunga",
                    "Nyagasagara",
                    "Rugando",
                    "Rugeyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagihunika",
                  "villages": [
                    "Gatoki",
                    "Gitagata",
                    "Kigusa",
                    "Kiruhura",
                    "Mbonwa",
                    "Nyakajuri",
                    "Rugarama",
                    "Rushubi",
                    "Rwankeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rulindo",
                  "villages": [
                    "Kabeza",
                    "Kabuye",
                    "Kagunga",
                    "Kanyamata",
                    "Karambo",
                    "Karubanzangabo",
                    "Kinyovi",
                    "Nyamuri",
                    "Rulindo",
                    "Runyonza"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mwogo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bitaba",
                  "villages": [
                    "Bitaba",
                    "Gatwe",
                    "Gisasa",
                    "Misatsi",
                    "Rebero",
                    "Rukoronko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagasa",
                  "villages": [
                    "Gatare",
                    "Gisenyi",
                    "Karutabana",
                    "Ngando",
                    "Rubumba",
                    "Rwintenderi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugunga",
                  "villages": [
                    "Kagerero",
                    "Nyamabuye",
                    "Nyarukombe",
                    "Rugazi",
                    "Rukira",
                    "Rukore",
                    "Rusagara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rurenge",
                  "villages": [
                    "Gatoki",
                    "Gitaraga",
                    "Kaboshya",
                    "Kaziramire",
                    "Rurenge",
                    "Rwabashenyi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ngeruka",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gihembe",
                  "villages": [
                    "Buhara",
                    "Kabaya",
                    "Kabuye",
                    "Kadebu",
                    "Kagasa",
                    "Karambo",
                    "Kirasaniro",
                    "Kururama",
                    "Nyakariba",
                    "Nyarubande",
                    "Rusagara",
                    "Rutare",
                    "Ruzinge",
                    "Shitwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murama",
                  "villages": [
                    "Agashyamba",
                    "Bishenyi",
                    "Fatinkanda",
                    "Gakurazo",
                    "Gatanga",
                    "Ikoni",
                    "Kagege",
                    "Kankuriyingoma",
                    "Kigandu",
                    "Kinamba",
                    "Murama",
                    "Muyange",
                    "Nyakagarama",
                    "Rusamaza",
                    "Rwabisheshe",
                    "Shami"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngeruka",
                  "villages": [
                    "Binyonzwe",
                    "Kamajeri",
                    "Kamasonga",
                    "Karugondo",
                    "Kivugiza",
                    "Muyange",
                    "Ngeruka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakayenzi",
                  "villages": [
                    "Heru",
                    "Kabuye",
                    "Karama",
                    "Kavumu",
                    "Kibaya",
                    "Kibungo",
                    "Kimiduha",
                    "Murambi",
                    "Nyakayenzi",
                    "Twimpara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutonde",
                  "villages": [
                    "Akajuri",
                    "Kabare",
                    "Kabumbwe",
                    "Kagano",
                    "Kamugera",
                    "Kamugore",
                    "Kigarama",
                    "Rubirizi",
                    "Rugazi",
                    "Runyonza",
                    "Rusibya"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ntarama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyugaro",
                  "villages": [
                    "Gatoro",
                    "Kayenzi",
                    "Kidudu",
                    "Kingabo",
                    "Rubomborana",
                    "Rugarama",
                    "Rugunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanzenze",
                  "villages": [
                    "Cyeru",
                    "Gasagara",
                    "Kabaha",
                    "Kabeza",
                    "Karumuna",
                    "Kurugenge",
                    "Nyamabuye",
                    "Rwangara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibungo",
                  "villages": [
                    "Kagoma I",
                    "Kagoma II",
                    "Kiganwa",
                    "Nganwa",
                    "Nyarunazi",
                    "Ruhengeri",
                    "Rusekera"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyamata",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kanazi",
                  "villages": [
                    "Bihari",
                    "Cyeru",
                    "Gitovu",
                    "Kagirazina",
                    "Musagara",
                    "Nyarugati I",
                    "Nyarugati II",
                    "Rugando",
                    "Sumbure"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kayumba",
                  "villages": [
                    "Gatare",
                    "Karambi",
                    "Kayenzi",
                    "Murambi",
                    "Nyagatovu",
                    "Nyakwibereka",
                    "Nyiramatuntu",
                    "Rwanza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Maranyundo",
                  "villages": [
                    "Gahembe",
                    "Gisunzu",
                    "Mukoma",
                    "Muyange",
                    "Rugarama",
                    "Rusagara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murama",
                  "villages": [
                    "Bishweshwe",
                    "Gataraga",
                    "Gatare",
                    "Kasebigege",
                    "Kivugiza",
                    "Kiyogoma",
                    "Mwesa",
                    "Rucucu",
                    "Ruhanga",
                    "Rutobotobo",
                    "Rutukura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamata y' Umujyi",
                  "villages": [
                    "Gasenga I",
                    "Gasenga II",
                    "Gatare I",
                    "Gatare II",
                    "Gatare III",
                    "Nyabivumu",
                    "Nyamata I",
                    "Nyamata II",
                    "Rugarama I",
                    "Rugarama II",
                    "Rugarama III",
                    "Rwakibirizi I",
                    "Rwakibirizi II"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyarugenge",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gihinga",
                  "villages": [
                    "Mabanga",
                    "Mwoshya",
                    "Ntungamo",
                    "Nyabuhoro",
                    "Nyagasozi",
                    "Nyarubande",
                    "Rwabusoro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuye",
                  "villages": [
                    "Cyahafi",
                    "Gateko",
                    "Gatoki",
                    "Karubagazi",
                    "Nyakabingo",
                    "Nyakabuye",
                    "Nyarusambu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": [
                    "Cundaminega",
                    "Cyeru",
                    "Kadogori",
                    "Kanombe",
                    "Kayitanga",
                    "Nyagakombe",
                    "Rugandara",
                    "Rurama",
                    "Rushorezo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngenda",
                  "villages": [
                    "Bushonyi",
                    "Kamabare",
                    "Kamugera",
                    "Kiyovu",
                    "Muyange",
                    "Nyagisenyi",
                    "Rubona",
                    "Rugasa",
                    "Rwashangwe",
                    "Tubumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugando",
                  "villages": [
                    "Bushenyi",
                    "Gako",
                    "Kamahirwe",
                    "Nsoro",
                    "Rebero",
                    "Rugero"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rilima",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kabeza",
                  "villages": [
                    "Bidenge",
                    "Biraro",
                    "Bwiza",
                    "Gako",
                    "Gasarwe",
                    "Gasave",
                    "Gitega",
                    "Kabeza",
                    "Kagarama",
                    "Karambi",
                    "Karambo",
                    "Karirisi",
                    "Marembo",
                    "Nyamisagara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karera",
                  "villages": [
                    "Gakurazo",
                    "Gatare",
                    "Kamahoro",
                    "Mutarama",
                    "Ruyenzi",
                    "Rwankomati",
                    "Rwavuningoma",
                    "Rwimirama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kimaranzara",
                  "villages": [
                    "Akintwari",
                    "Akumunezero",
                    "Amizero",
                    "Buhoro",
                    "Byimana",
                    "Gasabo",
                    "Gihushi",
                    "Akabahaya",
                    "Kidogo",
                    "Kimaranzara",
                    "Kivumu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ntarama",
                  "villages": [
                    "Akabeza",
                    "Gasave",
                    "Gaseke",
                    "Gasenyi",
                    "Gitovu",
                    "Kagugu",
                    "Kamashya",
                    "Kavumu",
                    "Ntarama",
                    "Nyamure",
                    "Rurambo",
                    "Saruduha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabagendwa",
                  "villages": [
                    "Cyoma",
                    "Gicaca",
                    "Kamabuye",
                    "Karama",
                    "Mataba",
                    "Mubuga",
                    "Mukoma",
                    "Murambi",
                    "Nyabagendwa",
                    "Nyamizi",
                    "Rwibikara"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ruhuha",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bihari",
                  "villages": [
                    "Bihari",
                    "Busasamana",
                    "Masenga I",
                    "Masenga II",
                    "Mukoma",
                    "Nyagafunzo",
                    "Rugarama",
                    "Rwanzunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatanga",
                  "villages": [
                    "Butereri",
                    "Kayigi",
                    "Kibaza",
                    "Nyaburiba",
                    "Nyakagarama",
                    "Rwanika"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gikundamvura",
                  "villages": [
                    "Gikundamvura",
                    "Kanombe",
                    "Kazabagarura",
                    "Kiyovu",
                    "Rukurazo",
                    "Rusenyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kindama",
                  "villages": [
                    "Gatare",
                    "Gatovu",
                    "Kagasera",
                    "Kamweru",
                    "Kibaza",
                    "Kindama",
                    "Rebero",
                    "Ruramba",
                    "Rutare",
                    "Saruduha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhuha",
                  "villages": [
                    "Kimikamba",
                    "Mubano",
                    "Nyabaranga",
                    "Ruhuha I",
                    "Ruhuha II"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rweru",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Batima",
                  "villages": [
                    "Agahonnyo",
                    "Batima",
                    "Gasororo",
                    "Gikoma",
                    "Ihara",
                    "Kamudusi",
                    "Mbuganzeri",
                    "Rubira",
                    "Ruhehe",
                    "Twinyange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kintambwe",
                  "villages": [
                    "Gakindo",
                    "Gasenyi",
                    "Maburane",
                    "Mugina",
                    "Nyiragiseke",
                    "Nyirakanemba",
                    "Nyirarubomboza",
                    "Nzangwa",
                    "Ubukoroco"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mazane",
                  "villages": ["Gasasa", "Rukira", "Rusenyi"]
                },
                {
                  "type": "CELLS",
                  "name": "Nemba",
                  "villages": [
                    "Kigina",
                    "Kimpara",
                    "Kimvubu",
                    "Muyoboro",
                    "Nemba",
                    "Nyakabingo",
                    "Rutete",
                    "Rwibinyogote",
                    "Rwiminazi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkanga",
                  "villages": [
                    "Agashoro",
                    "Kivusha",
                    "Mujwiri",
                    "Mushyoroti",
                    "Nkanga",
                    "Ruzo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sharita",
                  "villages": ["Karizinge", "Sharita"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Shyara",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kabagugu",
                  "villages": ["Kabagugu", "Kinteko", "Ngaruye", "Rwamanyoni"]
                },
                {
                  "type": "CELLS",
                  "name": "Kamabuye",
                  "villages": ["Gakoni", "Nyabaguma", "Rubwirwa"]
                },
                {
                  "type": "CELLS",
                  "name": "Nziranziza",
                  "villages": ["Gahosha", "Kagarama", "Nziranziza", "Ruli"]
                },
                {
                  "type": "CELLS",
                  "name": "Rebero",
                  "villages": ["Gateko", "Nyamirama", "Rebero", "Rutebe"]
                },
                {
                  "type": "CELLS",
                  "name": "Rutare",
                  "villages": [
                    "Gaseke",
                    "Kamweru",
                    "Ruhanga",
                    "Rutare",
                    "Shyara"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Gatsibo",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Gasange",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kigabiro",
                  "villages": [
                    "Kabuye",
                    "Kigabiro",
                    "Maya",
                    "Munini",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kimana",
                  "villages": ["Byahi", "Kagarama", "Kimana", "Rugarama"]
                },
                {
                  "type": "CELLS",
                  "name": "Teme",
                  "villages": ["Buburankwi", "Giheta", "Kinunga", "Teme"]
                },
                {
                  "type": "CELLS",
                  "name": "Viro",
                  "villages": ["Gahara I", "Gahara II", "Kagogo", "Viro"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gatsibo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatsibo",
                  "villages": [
                    "Gatare",
                    "Gatsibo",
                    "Hanika",
                    "Mukwiza",
                    "Munini",
                    "Nyakagarama",
                    "Nyamuduha",
                    "Nyarukoni",
                    "Rwimbogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Manishya",
                  "villages": [
                    "Manishya",
                    "Nyagahandagaza",
                    "Nyaruhanga",
                    "Nyarukoni",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mugera",
                  "villages": [
                    "Kabuga",
                    "Kamasapfu",
                    "Karambo I",
                    "Kavumu",
                    "Kayisha",
                    "Kiraritsi",
                    "Mugera",
                    "Nyarukoni I",
                    "Rurama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabicwamba",
                  "villages": [
                    "Agakenyeri",
                    "Agakomeye",
                    "Agatoma",
                    "Gatungu",
                    "Kabashenda",
                    "Kaduha",
                    "Kigarama",
                    "Nyabiheke",
                    "Nyamuduha",
                    "Rucumbo",
                    "Rutovu",
                    "Ryabakame",
                    "Ryebare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagahanga",
                  "villages": [
                    "Gitega",
                    "Karama",
                    "Kizinga",
                    "Mangarama",
                    "Nyagahanga",
                    "Nyakibande",
                    "Rugarama",
                    "Rusenge"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gitoki",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bukomane",
                  "villages": [
                    "Bukomane",
                    "Muburembo",
                    "Gakiri",
                    "Gisaka",
                    "Kigomero",
                    "Mungaju",
                    "Nyakayaga",
                    "Mururema",
                    "Rwagitima",
                    "Ryarukaza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyabusheshe",
                  "villages": [
                    "Binunga",
                    "Cyabusheshe",
                    "Cyoto",
                    "Kigabiro",
                    "Kivuba",
                    "Nyarunazi",
                    "Rushashi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karubungo",
                  "villages": [
                    "Gisharara",
                    "Isangano",
                    "Kagugu",
                    "Kamuhenda",
                    "Karubungo",
                    "Kinyange",
                    "Nyagacyamo",
                    "Nyarugarama",
                    "Rugarama",
                    "Rwamuhinga",
                    "Sata"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mpondwa",
                  "villages": [
                    "Akibiraro",
                    "Akuruganda",
                    "Bukira",
                    "Bwiza",
                    "Gahama",
                    "Nyakabungo",
                    "Nyaruhanga",
                    "Ryabugenge",
                    "Tsima"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamirama",
                  "villages": [
                    "Gahabo",
                    "Kagarama",
                    "Kinteko",
                    "Kwishaba",
                    "Minago",
                    "Mwanama",
                    "Nyabikenke",
                    "Nyamuraza",
                    "Nyarukombe",
                    "Rukiri",
                    "Rwinsanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubira",
                  "villages": [
                    "Gakiri",
                    "Gikuyu",
                    "Kavumu",
                    "Nyakabota",
                    "Nyakagarama",
                    "Nyamengo",
                    "Rugarama",
                    "Rurehe",
                    "Rwintama"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kabarore",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kabarore",
                  "villages": ["Bihinga", "Kabarore I", "Kabaroreii", "Kabingo"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabeza",
                  "villages": ["Gatoki", "Kabeza", "Mishenyi", "Ryanjeru"]
                },
                {
                  "type": "CELLS",
                  "name": "Karenge",
                  "villages": ["Karenge", "Mutarama", "Nyarubuye"]
                },
                {
                  "type": "CELLS",
                  "name": "Marimba",
                  "villages": [
                    "Kabare",
                    "Kanteri",
                    "Marimba",
                    "Nyarwanya",
                    "Rebero",
                    "Rutenderi",
                    "Rwimbogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabikiri",
                  "villages": ["Kabeza", "Ngarama", "Nyabikiri"]
                },
                {
                  "type": "CELLS",
                  "name": "Simbwa",
                  "villages": ["Kibondo I", "Kibondo II", "Ruhuha", "Simbwa"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kageyo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Busetsa",
                  "villages": [
                    "Busetsa",
                    "Cyabuhimbiri",
                    "Cyatoko",
                    "Gitebwe",
                    "Kaninga",
                    "Kayenzi",
                    "Kivugiza",
                    "Nyarubuye",
                    "Nyarusange",
                    "Rugarama",
                    "Rwikubo",
                    "Tsima"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gituza",
                  "villages": [
                    "Bugarama",
                    "Gisiza",
                    "Kabacuzi",
                    "Kigara",
                    "Mpama",
                    "Nyakabare",
                    "Rwabihumbi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kintu",
                  "villages": [
                    "Gakeri",
                    "Jabiro",
                    "Kigando",
                    "Kirara",
                    "Nyakabungo",
                    "Rutoma",
                    "Ryabushogoro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagisozi",
                  "villages": [
                    "Agatare",
                    "Kageyo",
                    "Kashango",
                    "Kinyana",
                    "Nyabukobero",
                    "Nyagisozi",
                    "Rukira"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kiramuruzi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Akabuga",
                  "villages": [
                    "Akagarama",
                    "Akarambo",
                    "Amataba",
                    "Bushenyi",
                    "Businde",
                    "Kiramuruzi",
                    "Kiyogori",
                    "Nduba",
                    "Ubuhoro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gakenke",
                  "villages": [
                    "Akabingo",
                    "Akamasine",
                    "Akurusizi",
                    "Bwunyu",
                    "Gatugunda",
                    "Gipangu",
                    "Kayita",
                    "Nyakagarama",
                    "Nyamarebe",
                    "Rwagashyaba",
                    "Umurehe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gakoni",
                  "villages": [
                    "Karuhura",
                    "Kiyovu",
                    "Kumana",
                    "Kumunini",
                    "Kumwiga",
                    "Rwajembe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabisindu",
                  "villages": [
                    "Akabare",
                    "Akabuga",
                    "Akantunga",
                    "Bushenyi",
                    "Gahoko",
                    "Gasave",
                    "Gitunginka",
                    "Itaba",
                    "Karaba",
                    "Nyagasambu",
                    "Nyagashenyi",
                    "Nyarusambu",
                    "Rugenge"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kiziguro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Agakomeye",
                  "villages": [
                    "Agatovu",
                    "Akabingo",
                    "Akingondo",
                    "Bishenyi",
                    "Bwiza",
                    "Isangano",
                    "Ishanti",
                    "Munanira",
                    "Muringa",
                    "Nyungwe",
                    "Ubutatu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbogo",
                  "villages": [
                    "Akabuye",
                    "Akavumu",
                    "Nyakabungo",
                    "Nyakagarama",
                    "Rebero",
                    "Ryabihura",
                    "Ryamuhuzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ndatemwa",
                  "villages": [
                    "Akabagendo",
                    "Akamamesa",
                    "Akarambo",
                    "Bidudu",
                    "Gakunyu",
                    "Gihinga",
                    "Gorora",
                    "Kabukungu",
                    "Kanyonyomba",
                    "Kigarama",
                    "Kinunga",
                    "Mataba",
                    "Mishunzi",
                    "Murehe",
                    "Nyagashenyi",
                    "Rubungo",
                    "Rukungu",
                    "Ryarugema"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubona",
                  "villages": [
                    "Agatare",
                    "Akagarama",
                    "Amarende",
                    "Bwiza",
                    "Cyarutabira",
                    "Ihema",
                    "Iramba",
                    "Kigabiro",
                    "Kigoroba",
                    "Kinimba",
                    "Nyagasambu",
                    "Nyarurembo",
                    "Rubaya",
                    "Rubira",
                    "Ryakabucye",
                    "Ryanyiranyana",
                    "Tubindi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muhura",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bibare",
                  "villages": [
                    "Agasharu",
                    "Akabuga",
                    "Akagasaro",
                    "Cyahafi",
                    "Cyarugira",
                    "Cyaruhagazi",
                    "Gasigati",
                    "Kinyaga",
                    "Maryohe",
                    "Mugogo",
                    "Musasa",
                    "Rutoma",
                    "Rwangendo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gakorokombe",
                  "villages": [
                    "Agahama",
                    "Agasharu",
                    "Biniga",
                    "Kinihira",
                    "Nyarubuye",
                    "Umunini",
                    "Urubiri",
                    "Urugarama",
                    "Uwakibungo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mamfu",
                  "villages": [
                    "Agatagara",
                    "Akabirizi",
                    "Akamamana",
                    "Akamatamu",
                    "Akarengo",
                    "Kamugenge",
                    "Kaziga",
                    "Ruhinga",
                    "Rwanama",
                    "Umunanira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rumuli",
                  "villages": [
                    "Gihembe",
                    "Juga",
                    "Kabeza",
                    "Karama",
                    "Kigarama",
                    "Ntungamo",
                    "Nyange",
                    "Rwasama",
                    "Rweza",
                    "Umurambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Taba",
                  "villages": [
                    "Cyoga I",
                    "Cyoga II",
                    "Gahanga",
                    "Gatare",
                    "Kanyinya",
                    "Karenge",
                    "Matyazo",
                    "Mayora",
                    "Mwambaro",
                    "Nshoro",
                    "Rugarama",
                    "Ruhenda",
                    "Rususa",
                    "Rwangendo",
                    "Taba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Murambi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": [
                    "Agacyamo",
                    "Agasharu",
                    "Agatagara",
                    "Akamashya",
                    "Byimana",
                    "Kabarondo",
                    "Kabuga",
                    "Kigote",
                    "Kimironko",
                    "Kiniga",
                    "Mataba",
                    "Ryampunga",
                    "Urugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamiyaga",
                  "villages": [
                    "Bweranyange",
                    "Kabeza",
                    "Kagenge",
                    "Kiniga",
                    "Runyinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwankuba",
                  "villages": [
                    "Akarambo",
                    "Akayenzi",
                    "Ikinyaga",
                    "Impanzi",
                    "Nyagasambu",
                    "Nyagatovu",
                    "Umwiga",
                    "Urugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwimitereri",
                  "villages": [
                    "Bushenyi",
                    "Bweya",
                    "Byimana",
                    "Kibumba",
                    "Kigote",
                    "Kimondo",
                    "Kinunga",
                    "Nyakabanda",
                    "Rugarama"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ngarama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bugamba",
                  "villages": [
                    "Akagerero",
                    "Cyamuganga",
                    "Kajevuba",
                    "Kinihira",
                    "Kinyinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambi",
                  "villages": [
                    "Cyankondo",
                    "Kamuri",
                    "Karambi",
                    "Kimbugu",
                    "Mishenyi",
                    "Ruhuha",
                    "Rurama",
                    "Rushenyi",
                    "Ruziranyenzi",
                    "Rwagakara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigasha",
                  "villages": [
                    "Akabuga",
                    "Akabuye",
                    "Akagarama",
                    "Akajevuba",
                    "Byimana",
                    "Cyabahima",
                    "Cyahafi",
                    "Gikundamvura",
                    "Ikirongo",
                    "Iperu",
                    "Kinunga",
                    "Kiyovu",
                    "Kizunguruko",
                    "Mbogo",
                    "Nyagisa",
                    "Nyantojo",
                    "Rukombe",
                    "Rurama",
                    "Ruyonza",
                    "Rwangingo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngarama",
                  "villages": [
                    "Amahoro",
                    "Gatungo",
                    "Ibare",
                    "Intsinzi",
                    "Kabeho",
                    "Kiyovu",
                    "Rugarama",
                    "Urukundo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarubungo",
                  "villages": [
                    "Burambira",
                    "Kintarama",
                    "Kivumu",
                    "Murama",
                    "Rugarama",
                    "Ruhengeri",
                    "Rutovu",
                    "Rwiri"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyagihanga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gitinda",
                  "villages": [
                    "Gatungo",
                    "Isangano",
                    "Kibimbiri",
                    "Kintarama",
                    "Kirehe",
                    "Kiziba",
                    "Nyabukingi",
                    "Rushenyi",
                    "Twegerane"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibare",
                  "villages": [
                    "Bitaba",
                    "Bushashari",
                    "Bwicaro",
                    "Gashure",
                    "Gatyazo",
                    "Kagera",
                    "Kigarama",
                    "Kukabare",
                    "Murambi",
                    "Rugaragara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mayange",
                  "villages": [
                    "Kabuye",
                    "Kajevuba",
                    "Kamatamu",
                    "Mpangare I",
                    "Mpangare II",
                    "Neke",
                    "Nyarubuye",
                    "Rweza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": [
                    "Gishikiri",
                    "Kabeza",
                    "Kagarama",
                    "Kanyinya",
                    "Mubirembo",
                    "Munanira",
                    "Rukoma",
                    "Rusenge",
                    "Umugamba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagitabire",
                  "villages": [
                    "Byimana",
                    "Kabudogo",
                    "Kamiseke",
                    "Kamurara",
                    "Kibatsi",
                    "Kuwingeri",
                    "Mataba",
                    "Mpashani",
                    "Nyamikamba",
                    "Par-chance",
                    "Rwintare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamirama",
                  "villages": [
                    "Burembo",
                    "Butumba",
                    "Cyanyanoga",
                    "Kabuga",
                    "Nyakabungo",
                    "Nyamiyaga",
                    "Rugarama",
                    "Rugogwe"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Remera",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bushobora",
                  "villages": [
                    "Abanyangeyo",
                    "Agasenga",
                    "Akagarama I",
                    "Akagarama II",
                    "Akamabuye",
                    "Akankusi",
                    "Gumino",
                    "Nyagatabire",
                    "Rwagitima"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Butiruka",
                  "villages": ["Akabuga", "Gasabo", "Icyerekezo", "Urushenyi"]
                },
                {
                  "type": "CELLS",
                  "name": "Kigabiro",
                  "villages": [
                    "Akabuga",
                    "Amataba",
                    "Byimana",
                    "Kanyinya",
                    "Kigabiro",
                    "Runyinya",
                    "Rwamusaro",
                    "Rwikubo",
                    "Ryarutsinzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagakombe",
                  "villages": [
                    "Akababito",
                    "Karufuri",
                    "Nyakanga",
                    "Nyamarebe",
                    "Nyaruhoko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rurenge",
                  "villages": [
                    "Akagarama",
                    "Butinza",
                    "Kagunga",
                    "Kibenga",
                    "Nyagasozi",
                    "Rubare",
                    "Rugarama",
                    "Rurenge"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwarenga",
                  "villages": [
                    "Cyeru",
                    "Kabuye",
                    "Kagasha",
                    "Kigarama",
                    "Nyamugari",
                    "Nyarubuye",
                    "Rushenyi",
                    "Umunini"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rugarama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bugarama",
                  "villages": ["Akenene", "Kabare", "Nyagasiga", "Rebero"]
                },
                {
                  "type": "CELLS",
                  "name": "Gihuta",
                  "villages": [
                    "Agatare",
                    "Gashenyi I",
                    "Gashenyi II",
                    "Ibare",
                    "Ntende I",
                    "Ntende II",
                    "Nyagahanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanyangese",
                  "villages": [
                    "Agakiri",
                    "Akazinga",
                    "Amahoro",
                    "Cyampirita",
                    "Kabeza",
                    "Kanyangese",
                    "Munini",
                    "Nyabubare",
                    "Nyakariro",
                    "Rebero",
                    "Remera",
                    "Rugarama",
                    "Rugazi",
                    "Rwagitima",
                    "Rwunyu",
                    "Tetero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Matare",
                  "villages": [
                    "Agakenyeri",
                    "Akabare",
                    "Bujumo",
                    "Gitsimba I",
                    "Gitsimba II",
                    "Kabana",
                    "Matare",
                    "Nyagatare",
                    "Nyarusambu",
                    "Rebero",
                    "Rwankuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Matunguru",
                  "villages": [
                    "Akabasanza",
                    "Gatovu",
                    "Kabeza",
                    "Ngoma",
                    "Nyabagendwa",
                    "Nyamata",
                    "Nyamirambo",
                    "Nyenyeri",
                    "Rambura",
                    "Rushenyi",
                    "Tungiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Remera",
                  "villages": [
                    "Akajevuba",
                    "Gikoma",
                    "Kanyiranzage",
                    "Miko",
                    "Rwamivu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rwimbogo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kiburara",
                  "villages": [
                    "Isangano",
                    "Kiburara",
                    "Nyacyonga",
                    "Rebero",
                    "Rubirizi",
                    "Rugando"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munini",
                  "villages": [
                    "Gikobwa",
                    "Humure",
                    "Kabeza",
                    "Marembo",
                    "Mucucu",
                    "Munini",
                    "Nyamwiza",
                    "Rweza",
                    "Rwinyana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamatete",
                  "villages": [
                    "Akajevuba",
                    "Gashenyi",
                    "Gihunika",
                    "Gitega",
                    "Kabeza",
                    "Kagugu",
                    "Kidugudu",
                    "Kiyovu",
                    "Nyamatete",
                    "Rurembo",
                    "Rwimbogo",
                    "Rwiminazi",
                    "Umurego"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwikiniro",
                  "villages": [
                    "Akamahoro",
                    "Byimana",
                    "Isangano",
                    "Kabusunzu",
                    "Karambi",
                    "Kinunga",
                    "Ndama I",
                    "Ndama II",
                    "Nyamabuye",
                    "Rukomo",
                    "Rwikiniro I",
                    "Rwikiniro II"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Kayonza",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Gahini",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Juru",
                  "villages": [
                    "Gisenga",
                    "Juru",
                    "Kamudongo",
                    "Kimana",
                    "Kwisoko",
                    "Mikinga",
                    "Miyaga",
                    "Musimbi",
                    "Nyabombe",
                    "Nyabugogo",
                    "Nyakabungo",
                    "Rubariro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kahi",
                  "villages": [
                    "Akabare",
                    "Nyamiyaga",
                    "Rukore",
                    "Tsima",
                    "Uruhuha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiyenzi",
                  "villages": [
                    "Kabuye",
                    "Kinyinya",
                    "Kiyenzi",
                    "Nyagahandagaza",
                    "Nyirampaca"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Urugarama",
                  "villages": [
                    "Akabahizi",
                    "Akabeza",
                    "Akamuyenzi",
                    "Akimpara",
                    "Buyanja",
                    "Ibiza",
                    "Myatano",
                    "Nyagitabire",
                    "Rwinkuba",
                    "Umwiga",
                    "Urugarama",
                    "Videwo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kabare",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyarubare",
                  "villages": [
                    "Kabeza",
                    "Kacyiru",
                    "Kanyetonga",
                    "Kibimba",
                    "Kiburara",
                    "Mahumbezi",
                    "Nyagakonji",
                    "Rukagati",
                    "Rwabarema",
                    "Rwakavuna",
                    "Umunini",
                    "Umuremampango",
                    "Umuyenzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitara",
                  "villages": [
                    "Gahombya",
                    "Kagumiro",
                    "Kajevuba",
                    "Kazeneza",
                    "Mubuga",
                    "Rugunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kirehe",
                  "villages": [
                    "Duterimbere",
                    "Gahama",
                    "Gikombe",
                    "Kabatinya",
                    "Kabuhome",
                    "Kanyirabuki",
                    "Matahiro",
                    "Nyabiyenzi",
                    "Rompuwe",
                    "Rushenyi",
                    "Rwagatera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubimba",
                  "villages": [
                    "Bara",
                    "Buhabwa",
                    "Kabarungu",
                    "Kabeza",
                    "Kamuhabura",
                    "Nyarusange",
                    "Rwamushoma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubumba",
                  "villages": [
                    "Bwatampama",
                    "Gakenyeri",
                    "Gakoma",
                    "Gishyoza",
                    "Kibimba",
                    "Kibuye",
                    "Ntungamo",
                    "Nyabugogo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kabarondo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyabajwa",
                  "villages": [
                    "Busindu",
                    "Cyabajwa",
                    "Kabarondo",
                    "Murenge",
                    "Nkuba I",
                    "Nkuba II",
                    "Rugwagwa",
                    "Rutagara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyinzovu",
                  "villages": [
                    "Agashikiri",
                    "Akinyenyeri",
                    "Bitoma",
                    "Cyinzovu",
                    "Gihuke",
                    "Munini",
                    "Nyabisenga",
                    "Nyakabungo",
                    "Rugarama",
                    "Rugazi",
                    "Rurenge",
                    "Rwakigeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabura",
                  "villages": [
                    "Agasharu",
                    "Agatare",
                    "Akagarama",
                    "Gashonyi",
                    "Gisoro",
                    "Kabeza",
                    "Kabuye",
                    "Kanyegenyege",
                    "Murambi",
                    "Nyabikenke I",
                    "Nyabikenke II",
                    "Rubira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusera",
                  "villages": [
                    "Butobagire",
                    "Rurama",
                    "Rusera",
                    "Rutagara Centre",
                    "Umucyo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mukarange",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bwiza",
                  "villages": [
                    "Abemeramahoro",
                    "Abisunganye",
                    "Amizero",
                    "Karambarara",
                    "Kinyemera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kayonza",
                  "villages": [
                    "Akabuga",
                    "Buhonde",
                    "Cyeru",
                    "Gakurazo",
                    "Gasogororo",
                    "Gatebe",
                    "Kabungo",
                    "Kayonza Centre",
                    "Kivugiza",
                    "Miyange",
                    "Munazi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mburabuturo",
                  "villages": [
                    "Akabuga",
                    "Akarugangare",
                    "Bwingeyo",
                    "Gihima",
                    "Kinunga",
                    "Mburabuturo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagatovu",
                  "villages": [
                    "Akabeza",
                    "Akamarara",
                    "Akamayange",
                    "Akanyinya",
                    "Gatagara",
                    "Iragwe",
                    "Irebero",
                    "Nyagatovu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugendabari",
                  "villages": [
                    "Gikumba",
                    "Kanyamasha",
                    "Karambo I",
                    "Karambo II",
                    "Nyakagarama",
                    "Rugendabari",
                    "Rutare"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Murama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bunyentongo",
                  "villages": [
                    "Bweramvura",
                    "Gahengeri",
                    "Gisunzu",
                    "Kabeza",
                    "Kagarama",
                    "Mpilindi",
                    "Nyamabuye",
                    "Shyanda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muko",
                  "villages": [
                    "Gihazo",
                    "Karama",
                    "Ngoma",
                    "Rebezo",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murama",
                  "villages": [
                    "Bubindi",
                    "Kajevuba",
                    "Murama",
                    "Rusaro",
                    "Rwabugengeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakanazi",
                  "villages": [
                    "Busasamana",
                    "Nyagahinga",
                    "Nyakanazi",
                    "Rugazi",
                    "Rurenge"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusave",
                  "villages": [
                    "Bicumbi",
                    "Bwinyana",
                    "Byimana",
                    "Gasutamo",
                    "Kinyinya",
                    "Seresi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Murundi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buhabwa",
                  "villages": [
                    "Buhabwa",
                    "Cyamburara",
                    "Gakoma",
                    "Miyaga",
                    "Mucucu",
                    "Murundi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambi",
                  "villages": [
                    "Akamina",
                    "Bugarura",
                    "Gafunzo",
                    "Kabana",
                    "Kabuga",
                    "Karambi",
                    "Kiyovu",
                    "Ngumeri I",
                    "Ngumeri II",
                    "Nyagashanga",
                    "Nyamirama",
                    "Rugunga",
                    "Rukoyoyo",
                    "Rumuri",
                    "Rushenyi",
                    "Rwasama",
                    "Rwinsheke I",
                    "Rwinsheke II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murundi",
                  "villages": [
                    "Kayongo",
                    "Kibari",
                    "Kinyana",
                    "Macuba",
                    "Nyanga",
                    "Rucaca"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ryamanyoni",
                  "villages": [
                    "Akanyerezo",
                    "Cyandorimana",
                    "Kabingo",
                    "Kaneke",
                    "Kanyegera",
                    "Ngarama",
                    "Nyabugando",
                    "Rwakabanda",
                    "Rwinyambo",
                    "Ryakirenzi I",
                    "Ryakirenzi II",
                    "Ryamanyoni",
                    "Ubwiza"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mwiri",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kageyo",
                  "villages": [
                    "Gisunzu",
                    "Kiyonza",
                    "Ndago",
                    "Rugeyo",
                    "Rwisirabo I",
                    "Rwisirabo II",
                    "Sebasengo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Migera",
                  "villages": [
                    "Agahiza",
                    "Murori",
                    "Mwiri",
                    "Nyakagarama",
                    "Umutekano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamugari",
                  "villages": [
                    "Gasarabwayi",
                    "Kabeza",
                    "Kabukeye",
                    "Kigarama",
                    "Ruhoroba",
                    "Rwazana",
                    "Ryamutumo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyawera",
                  "villages": [
                    "Gitega",
                    "Muhozi",
                    "Murehe",
                    "Nyakabungo",
                    "Ryakibanda"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ndego",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Byimana",
                  "villages": [
                    "Busasamana",
                    "Irebero",
                    "Kabeza",
                    "Kururembo",
                    "Nyakabingo",
                    "Nyamata"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Isangano",
                  "villages": [
                    "Gafunzo",
                    "Gashonga",
                    "Kabusunzu",
                    "Kagese",
                    "Kagoma",
                    "Kamahoro",
                    "Kanyinya",
                    "Kibare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambi",
                  "villages": [
                    "Gasenyi",
                    "Ihema",
                    "Kagasa",
                    "Kamabuye",
                    "Kumunini",
                    "Murambi",
                    "Musenyi",
                    "Remera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiyovu",
                  "villages": [
                    "Gasabo",
                    "Humure",
                    "Iramiro",
                    "Mwurire",
                    "Nyamugali"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyamirama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gikaya",
                  "villages": [
                    "Gasharu",
                    "Gasogi",
                    "Gasura",
                    "Kabuye",
                    "Kamonyi",
                    "Karambi",
                    "Kinkoronko",
                    "Kiyanja"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musumba",
                  "villages": [
                    "Karama",
                    "Kiyovu",
                    "Musenyi",
                    "Nyabisindu",
                    "Nyagasambu",
                    "Nyarunazi",
                    "Rusera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rurambi",
                  "villages": [
                    "Amashinge",
                    "Bwiza",
                    "Kabeza",
                    "Kabuya I",
                    "Kabuya II",
                    "Kabuye",
                    "Ntintyi",
                    "Rugarama",
                    "Ruvumu",
                    "Shirinyota"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shyogo",
                  "villages": [
                    "Agasharu",
                    "Gatoki",
                    "Kacyiru",
                    "Nyacyonga",
                    "Nyakagarama",
                    "Rugagi",
                    "Rwangabarezi",
                    "Rwinyana"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rukara",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kawangire",
                  "villages": [
                    "Butimba I",
                    "Butimba II",
                    "Gakenyeri",
                    "Gitega",
                    "Karama",
                    "Kidogo",
                    "Kinunga",
                    "Rwempasha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukara",
                  "villages": [
                    "Butimba",
                    "Buyonza",
                    "Gitarama",
                    "Ibiza",
                    "Kabuga",
                    "Kamajigija",
                    "Karambo I",
                    "Karambo II",
                    "Karubamba",
                    "Kinunga I",
                    "Kinunga II",
                    "Mitungo",
                    "Mumuri",
                    "Munyinya",
                    "Muzizi",
                    "Nyagaharabuge",
                    "Nyirarukara",
                    "Uruyenzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwimishinya",
                  "villages": [
                    "Akabare I",
                    "Akabare II",
                    "Karagari I",
                    "Karagari II",
                    "Kigwene I",
                    "Kigwene II",
                    "Kinunga I",
                    "Kinunga II",
                    "Mirambi I",
                    "Mirambi II",
                    "Mirambi III",
                    "Nyarutunga I",
                    "Nyarutunga II"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ruramira",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bugambira",
                  "villages": [
                    "Agasharu",
                    "Agatare",
                    "Amashya",
                    "Buhoro",
                    "Murambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkamba",
                  "villages": [
                    "Akabarima",
                    "Akarambo",
                    "Cyabitana",
                    "Gitega",
                    "Nyagacyamu",
                    "Sabununga",
                    "Umubuga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruyonza",
                  "villages": [
                    "Gisenga",
                    "Gitoki",
                    "Gitwa",
                    "Kabeza",
                    "Kacyiru",
                    "Rukoma",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Umubuga",
                  "villages": [
                    "Agasharu",
                    "Akarugina",
                    "Amazinga",
                    "Gitesannyi",
                    "Kabukara",
                    "Kabuye",
                    "Kajembe",
                    "Kamukire"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rwinkwavu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gihinga",
                  "villages": [
                    "Akajevuba",
                    "Akayebe",
                    "Gihinga",
                    "Karuhambo",
                    "Migera",
                    "Nyabimuri",
                    "Rubirizi",
                    "Rugunga",
                    "Rusera",
                    "Uburembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbarara",
                  "villages": [
                    "Gacaca",
                    "Gahushyi",
                    "Kingogo",
                    "Mbarara I",
                    "Mbarara II",
                    "Mutembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mukoyoyo",
                  "villages": [
                    "Bishenyi",
                    "Busasamana",
                    "Bwiza",
                    "Dusabane",
                    "Kazeneza",
                    "Kiyovu",
                    "Mahumbezi",
                    "Mutembo",
                    "Nyamabuye",
                    "Nyankora",
                    "Nyarwashama I",
                    "Nyarwashama II",
                    "Rebero",
                    "Twibanire",
                    "Twiyunge",
                    "Vungiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkondo",
                  "villages": [
                    "Burigade",
                    "Byimana",
                    "Gasabo",
                    "Gisozi",
                    "Kinihira",
                    "Matinza",
                    "Muganza",
                    "Nkondo I",
                    "Nkondo II",
                    "Nyabihare",
                    "Rebero",
                    "Rurama",
                    "Rwinkwavu",
                    "Seka"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Kirehe",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Gahara",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Butezi",
                  "villages": [
                    "Cyamabuye",
                    "Cyasusa I",
                    "Cyasusa II",
                    "Irama Centre",
                    "Kabeza",
                    "Kijumbura I",
                    "Kijumbura II",
                    "Kijumbura III",
                    "Kivogera",
                    "Rwabarimba",
                    "Rwabiyombe",
                    "Rwamabenga",
                    "Rwamuzima",
                    "Samuko",
                    "Umubano I",
                    "Umubano II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhamba",
                  "villages": [
                    "Bukorasi",
                    "Cyobaharaye",
                    "Gacaca",
                    "Gasaka",
                    "Gasasa",
                    "Kabeza",
                    "Muhero",
                    "Murama",
                    "Muyange",
                    "Ntaruka",
                    "Nyabitare",
                    "Rusisiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murehe",
                  "villages": [
                    "Cyasemakamba",
                    "Cyumbati",
                    "Isangano",
                    "Mugogo",
                    "Murama I",
                    "Murama II",
                    "Nyakarambi",
                    "Nyamahuna",
                    "Nyamirondogoro",
                    "Nyamugari",
                    "Nyankurazo",
                    "Nyombe",
                    "Village Dagaza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagasenyi",
                  "villages": [
                    "Cyabihama I",
                    "Cyabihama II",
                    "Gakurungo",
                    "Gasarabwayi",
                    "Gashongora",
                    "Iribagiza",
                    "Kabagera",
                    "Kagarama",
                    "Mugatare",
                    "Nyakabimba",
                    "Nyamisagara",
                    "Rugando",
                    "Rugina",
                    "Rusave",
                    "Rwabaseka",
                    "Rwambanda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakagezi",
                  "villages": [
                    "Kivogo",
                    "Muguruka I",
                    "Muguruka II",
                    "Mukundanya",
                    "Nyagasozi",
                    "Rubira",
                    "Rubumba",
                    "Rurama",
                    "Susuruka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubimba",
                  "villages": [
                    "Agatangaza",
                    "Byimana",
                    "Kanteyamanga",
                    "Kinyonzo I",
                    "Kinyonzo II",
                    "Nyagasozi",
                    "Nyakarambi",
                    "Rubira",
                    "Rununga",
                    "Rwakajonge",
                    "Rwamaranga I",
                    "Rwamaranga II",
                    "Rwamurema",
                    "Umubogora"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gatore",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Curazo",
                  "villages": [
                    "Gatenga",
                    "Kigarama",
                    "Mugeruko",
                    "Nyarwogo",
                    "Rugari",
                    "Runyinya",
                    "Rutoma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyunuzi",
                  "villages": [
                    "Cyunuzi I",
                    "Cyunuzi II",
                    "Gakuyo",
                    "Kabeza",
                    "Kabungo",
                    "Nyagashyanga",
                    "Rurenge"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muganza",
                  "villages": [
                    "Kamomo",
                    "Karenge",
                    "Ntungamo",
                    "Nyarusange",
                    "Rebero",
                    "Rwabigaro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamiryango",
                  "villages": [
                    "Bwiza",
                    "Gashanga",
                    "Gasharu",
                    "Karambi",
                    "Nyagitongo",
                    "Rubuye",
                    "Rwanyabigaba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwabutazi",
                  "villages": [
                    "Bitoma I",
                    "Bitoma II",
                    "Muyange",
                    "Rugina",
                    "Rurembo I",
                    "Samuko",
                    "Ururembo II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwantonde",
                  "villages": [
                    "Cyiha",
                    "Karehero",
                    "Karembo",
                    "Kavomo",
                    "Kigarama",
                    "Mitoyi",
                    "Mumeya",
                    "Rubona",
                    "Rusenyi",
                    "Rutare"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kigarama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyanya",
                  "villages": [
                    "Cyanya",
                    "Gakoni",
                    "Kabimba I",
                    "Kabimba II",
                    "Kigende",
                    "Nyakavogo",
                    "Nyamikoni",
                    "Nyamirambo I",
                    "Nyamirambo II",
                    "Nyarutovu",
                    "Rubare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigarama",
                  "villages": [
                    "Gahindu",
                    "Humure",
                    "Kigarama",
                    "Kiravunga",
                    "Nyakazinga",
                    "Nyamiyaga",
                    "Nyarutojo",
                    "Rugari",
                    "Rurenge",
                    "Samuko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiremera",
                  "villages": [
                    "Bweranka I",
                    "Bweranka II",
                    "Cyanika",
                    "Irama",
                    "Kagane",
                    "Kagorogoro",
                    "Kaguriro",
                    "Karenge I",
                    "Karenge II",
                    "Kayirarye",
                    "Kimesho",
                    "Kiremera",
                    "Nyaryenge",
                    "Rwesinge",
                    "Umunezero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakerera",
                  "villages": [
                    "Gasenyi",
                    "Gatari",
                    "Kabare",
                    "Kabuga",
                    "Kiyovu",
                    "Nyabubare",
                    "Ruhandagazi",
                    "Rukiri",
                    "Ryamukaza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyankurazo",
                  "villages": [
                    "Kabeza",
                    "Kivu",
                    "Marembo",
                    "Nshungerezi",
                    "Nyagahanga",
                    "Nyakabungo",
                    "Nyakigera",
                    "Nyakwisi",
                    "Rama",
                    "Ruhuha",
                    "Rusumo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kigina",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatarama",
                  "villages": [
                    "Efemu",
                    "Gitaba",
                    "Kabimba",
                    "Kabugwe",
                    "Kanogo",
                    "Kanyabihara",
                    "Nyakizu",
                    "Ruhama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugarama",
                  "villages": [
                    "Isangano",
                    "Kabeza",
                    "Kagega",
                    "Kimeya",
                    "Kubwinteko",
                    "Kabuga",
                    "Kundengo",
                    "Byimana",
                    "Muganza",
                    "Nyagisozi",
                    "Rugando",
                    "Rugarama",
                    "Rujambara",
                    "Rwakanyambo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhanga",
                  "villages": [
                    "Buhwaga",
                    "Kavuzo",
                    "Ku Murenge",
                    "Nyagasozi",
                    "Nyakarambi I",
                    "Nyakarambi II",
                    "Nyakibande",
                    "Rebezo",
                    "Rubare",
                    "Rwagasare I",
                    "Rwagasare II",
                    "Rwakarinda",
                    "Rwamabare",
                    "Rwamakara",
                    "Rwanyamutara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwanteru",
                  "villages": [
                    "Bugarura",
                    "Gasarasi",
                    "Mugisenyi I",
                    "Mugisenyi II",
                    "Nyakayaga",
                    "Rusororo",
                    "Rwanteru I",
                    "Rwanteru II"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kirehe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gahama",
                  "villages": [
                    "Byimana",
                    "Kabeza",
                    "Kaziba",
                    "Kiyovu",
                    "Muhweza",
                    "Murugarama",
                    "Ntungamo",
                    "Nyakatsi",
                    "Nyamazi",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kirehe",
                  "villages": [
                    "Agatwa",
                    "Byimana",
                    "Kamasaro",
                    "Kirehe",
                    "Mirambi",
                    "Runyinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabigega",
                  "villages": [
                    "Bugarura",
                    "Duterimbere",
                    "Gahuzamiryango",
                    "Kabeza",
                    "Kamuhoza",
                    "Mushirarungu",
                    "Nyarurembo",
                    "Rurenge",
                    "Twizerane",
                    "Vatikani"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabikokora",
                  "villages": [
                    "Bwiza",
                    "Byimana",
                    "Kaduha",
                    "Karenge",
                    "Kiyovu",
                    "Kwihanika",
                    "Kwirebero",
                    "Mumpinga",
                    "Nyarurembo",
                    "Nyarusange",
                    "Rugenge",
                    "Rugero",
                    "Rurama",
                    "Rusamaza",
                    "Rutonde"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwesero",
                  "villages": [
                    "Bengazi",
                    "Byimana",
                    "Gahama",
                    "Kabeza",
                    "Karuhura",
                    "Munini",
                    "Rwabikweto",
                    "Rwesero"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mahama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kamombo",
                  "villages": [
                    "Amahoro",
                    "Bwiza",
                    "Byimana",
                    "Kabuga",
                    "Kamabuye",
                    "Kamato",
                    "Kamombo",
                    "Kigongi",
                    "Kigufi",
                    "Rumuri",
                    "Terimbere",
                    "Umubano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munini",
                  "villages": [
                    "Kabeza",
                    "Kagera",
                    "Karambi",
                    "Munini",
                    "Nyenyeri",
                    "Rebero",
                    "Remanyundo",
                    "Rugarama",
                    "Ruhondo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwoga",
                  "villages": [
                    "Buhaga",
                    "Cyanika",
                    "Gisanze",
                    "Isangano",
                    "Kwisha",
                    "Mwoga",
                    "Nyarusange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Saruhembe",
                  "villages": [
                    "Gisenyi",
                    "Kanombe",
                    "Karebezo",
                    "Muride",
                    "Nyagahanga",
                    "Nyamiyumbo",
                    "Rushonga",
                    "Saruhembe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Umunini",
                  "villages": ["Ihuriro"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mpanga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bwiyorere",
                  "villages": [
                    "Bihembe",
                    "Cyimparage",
                    "Gisenyi",
                    "Kacyiru",
                    "Kamarashavu",
                    "Kangarame",
                    "Nyagasenyi",
                    "Nyakabande",
                    "Ruhama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kankobwa",
                  "villages": [
                    "Kankobwa",
                    "Murundi",
                    "Nyamiyaga",
                    "Remera",
                    "Rusha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mpanga",
                  "villages": [
                    "Kabuye I",
                    "Kabuye II",
                    "Mpanga",
                    "Nyagatovu",
                    "Rurambi I",
                    "Rurambi II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mushongi",
                  "villages": [
                    "Gitoma",
                    "Kayanga",
                    "Mishenyi",
                    "Mushongi",
                    "Ngugu I",
                    "Ngugu II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nasho",
                  "villages": [
                    "Agasasa",
                    "Busasamana I",
                    "Busasamana II",
                    "Ibanda",
                    "Mutwe",
                    "Nyabubare I",
                    "Nyabubare II",
                    "Nyawera I",
                    "Nyawera II",
                    "Pilote"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakabungo",
                  "villages": [
                    "Cyamuhabura",
                    "Gikushya",
                    "Gitega",
                    "Isenga",
                    "Kabuga",
                    "Nyagatovu",
                    "Nyakabungo",
                    "Rudandi",
                    "Rushenyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubaya",
                  "villages": [
                    "Akinzuki",
                    "Byimana",
                    "Gacenshero",
                    "Kabeza",
                    "Mumpinga",
                    "Murambi",
                    "Rubaya",
                    "Rukonji",
                    "Rushonga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Musaza",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasarabwayi",
                  "villages": [
                    "Gasarabwayi",
                    "Gicuma",
                    "Kanyosha",
                    "Nyakariba I",
                    "Nyakariba II",
                    "Nyakiriba",
                    "Rukumba",
                    "Rwinyundo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Gikenke",
                    "Kabuga",
                    "Kagasa",
                    "Kambwire",
                    "Kimeya",
                    "Nyamugari",
                    "Rubuye I",
                    "Rubuye II",
                    "Rugango",
                    "Rwamurema"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": [
                    "Kanogo",
                    "Kanombe",
                    "Kiyovu",
                    "Mubuga",
                    "Runyinya",
                    "Rwamuhazi",
                    "Ryabega",
                    "Ryarugazi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musaza",
                  "villages": [
                    "Gatwe I",
                    "Gatwe II",
                    "Kanyinya I",
                    "Kanyinya II",
                    "Musaza",
                    "Muyoka",
                    "Nyakariba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nganda",
                  "villages": [
                    "Gacuba I",
                    "Gacuba II",
                    "Kamagare",
                    "Kaziba",
                    "Murura",
                    "Nganda",
                    "Nganda Ville I",
                    "Nganda Ville II",
                    "Nyamiyaga",
                    "Ruseke",
                    "Rwabugagara",
                    "Rwamushongore"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mushikiri",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bisagara",
                  "villages": [
                    "Bingaro",
                    "Bisagara",
                    "Isangano",
                    "Kampara",
                    "Nkoyoyo",
                    "Nyabubare",
                    "Nyakabande",
                    "Ruturamigina",
                    "Umunini",
                    "Umutuzo",
                    "Umuyange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyamigurwa",
                  "villages": [
                    "Bwiza",
                    "Impara",
                    "Isangano",
                    "Kamasare",
                    "Karenge",
                    "Kigarama",
                    "Nyamabuye",
                    "Rusenyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugarama",
                  "villages": [
                    "Birengero",
                    "Bugarura",
                    "Cyanjuna",
                    "Cyanyamisa",
                    "Gahushyi",
                    "Kacyiru",
                    "Kamarashavu",
                    "Kamunyana",
                    "Karambi",
                    "Nyagatugunda",
                    "Nyagitongo",
                    "Rutare",
                    "Rwamunana",
                    "Ryogire",
                    "Tomi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwanyamuhanga",
                  "villages": [
                    "Bweramana",
                    "Cyaka",
                    "Cyeru",
                    "Humure",
                    "Mugina",
                    "Munini",
                    "Nterere",
                    "Nyagateme",
                    "Nyaruhanga",
                    "Rubimba",
                    "Rutare",
                    "Rutoma",
                    "Sake"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwayikona",
                  "villages": [
                    "Barisuka",
                    "Birembo",
                    "Isangano",
                    "Kabeza",
                    "Kabuga",
                    "Nyakabande",
                    "Nyungwe",
                    "Rukira",
                    "Rusumo",
                    "Rwahenge",
                    "Rwakabandama",
                    "Rwayikona",
                    "Tonero"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nasho",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyambwe",
                  "villages": [
                    "Gicaca",
                    "Kagamba",
                    "Kagese I",
                    "Nyakazinga",
                    "Rugwiro",
                    "Rukono",
                    "Rushoka",
                    "Rwinyange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagese",
                  "villages": [
                    "Gatunguru",
                    "Kagese II",
                    "Kanamira",
                    "Kibimba",
                    "Mitsindo",
                    "Murehe",
                    "Nyabimuri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ntaruka",
                  "villages": [
                    "Gashasha",
                    "Kabusunzu",
                    "Karenge II",
                    "Nyabihara",
                    "Nyagasozi",
                    "Nyamurindira",
                    "Ruhema",
                    "Ruseke",
                    "Rwamuhigi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubirizi",
                  "villages": [
                    "Kabigembe I",
                    "Kabigembe II",
                    "Kadamu",
                    "Karenge I",
                    "Masizi",
                    "Mulindi",
                    "Nyabiyenzi",
                    "Rwandarushya I",
                    "Rwandarushya II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugoma",
                  "villages": [
                    "Gashiru",
                    "Gatarama",
                    "Gatare",
                    "Kabigembe",
                    "Kageyo",
                    "Karama",
                    "Karubare",
                    "Rebezo",
                    "Rugoma"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyamugari",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bukora",
                  "villages": [
                    "Bukinanyana",
                    "Bukora",
                    "Busasamana",
                    "Bweramana",
                    "Kabuga",
                    "Maranyundo",
                    "Mudahunga",
                    "Mumararungu",
                    "Mushirarungu",
                    "Mwima",
                    "Nyabiyenzi",
                    "Remanyundo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagasa",
                  "villages": [
                    "Bwiza",
                    "Ituze",
                    "Kagasa",
                    "Kamabuye",
                    "Kameya",
                    "Mataba",
                    "Nyabayama",
                    "Nyakariba",
                    "Nyamirama",
                    "Nyarurembo",
                    "Rebero",
                    "Urugwiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kazizi",
                  "villages": [
                    "Amahoro",
                    "Byimana",
                    "Gahomvu",
                    "Gasabo",
                    "Gasetsa",
                    "Gashanga",
                    "Jyambere",
                    "Kabwayi",
                    "Mucyo",
                    "Nyenyeri",
                    "Tetero",
                    "Ururembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiyanzi",
                  "villages": [
                    "Kabungeri",
                    "Kabuye",
                    "Kacyiru",
                    "Kagera",
                    "Kamarashavu",
                    "Karambi",
                    "Karehe",
                    "Karembo",
                    "Kinamba",
                    "Matare",
                    "Mitako",
                    "Murambi",
                    "Muyinza",
                    "Nyarwamura",
                    "Remera",
                    "Rusumo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamugari",
                  "villages": [
                    "Amahoro",
                    "Gasenyi",
                    "Ihuriro",
                    "Isangano",
                    "Kabeza",
                    "Kamugarura",
                    "Kimigisha",
                    "Munini",
                    "Muramba",
                    "Nyagahama",
                    "Nyamugari Centre",
                    "Rama",
                    "Rebero",
                    "Rurembo",
                    "Rusozi",
                    "Ubumwe",
                    "Umubano",
                    "Umunezero"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyarubuye",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Mareba",
                  "villages": [
                    "Burembo",
                    "Kaziba I",
                    "Kaziba II",
                    "Nyacyonga I",
                    "Nyacyonga II",
                    "Nyamateke",
                    "Rurenge I",
                    "Rurenge II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabitare",
                  "villages": [
                    "Bicumbi",
                    "Kazizi",
                    "Kazizi II",
                    "Mpanguhe",
                    "Ndabarekuye",
                    "Nyabayama",
                    "Nyabitare",
                    "Nyamisagara",
                    "Nyamugari",
                    "Rugarama",
                    "Rwamagana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarutunga",
                  "villages": [
                    "Bugarura",
                    "Kagabiro",
                    "Kagorogoro",
                    "Nkakwa",
                    "Nyakanazi",
                    "Nyarubuye I",
                    "Nyarubuye II",
                    "Nyarutunga",
                    "Remera",
                    "Rubare",
                    "Rutunga"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Ngoma",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Gashanda",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyerwa",
                  "villages": [
                    "Cyerwa",
                    "Gako",
                    "Mizibiri",
                    "Muyange",
                    "Nyamugali",
                    "Ruyema I",
                    "Ruyema II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Giseri",
                  "villages": [
                    "Kibimba",
                    "Murambi",
                    "Nyagitabire",
                    "Rubambantare",
                    "Rwambohero",
                    "Rwanyamigono"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munege",
                  "villages": ["Gakuto", "Kanege", "Nyagasenga", "Rugarama"]
                },
                {
                  "type": "CELLS",
                  "name": "Mutsindo",
                  "villages": [
                    "Cyanama",
                    "Gisenyi",
                    "Kanyinya",
                    "Kirundo",
                    "Nyakarambo",
                    "Nyamasare",
                    "Rwakavuna",
                    "Rwinkuba",
                    "Ryangiriye"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Jarama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Ihanika",
                  "villages": [
                    "Irebero",
                    "Kabonero",
                    "Kamapfizi",
                    "Kivugiza",
                    "Nyamugari",
                    "Umuka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Jarama",
                  "villages": [
                    "Abiyunze",
                    "Akabeza",
                    "Dufatanye",
                    "Duterimbere",
                    "Irarire",
                    "Twizerane",
                    "Ubumwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karenge",
                  "villages": [
                    "Akabuga",
                    "Akagoma",
                    "Akajevuba",
                    "Gisoko",
                    "Kanombe",
                    "Karenge",
                    "Kavumu",
                    "Korandebe",
                    "Nyamirambo",
                    "Nyarurembo",
                    "Rusenyi",
                    "Shirinyota"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibimba",
                  "villages": [
                    "Akabira",
                    "Akaziba",
                    "Cyahafi",
                    "Ibabiri",
                    "Murama",
                    "Uruhuha",
                    "Urukomo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigoma",
                  "villages": [
                    "Icyurusambu",
                    "Iramiro",
                    "Kigoma",
                    "Meraneza",
                    "Mubaha",
                    "Ramba",
                    "Remera",
                    "Vunga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Karembo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Akaziba",
                  "villages": [
                    "Impinga",
                    "Kwiperu",
                    "Kukabeza",
                    "Ngara",
                    "Nyagasozi",
                    "Rubumba",
                    "Rukizi",
                    "Rurenge",
                    "Rwamuhimbura",
                    "Umusebeya",
                    "Umuyange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karaba",
                  "villages": [
                    "Kigobe",
                    "Mungoro",
                    "Rusumbantwari",
                    "Umurehe",
                    "Urutare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamirambo",
                  "villages": [
                    "Gashekasheke I",
                    "Gashekasheke II",
                    "Gitaraga",
                    "Kanama",
                    "Karibu",
                    "Kivugangoma I",
                    "Kivugangoma II",
                    "Mumahoro",
                    "Murambi",
                    "Rwakayango"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kazo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Birenga",
                  "villages": [
                    "Gahondo",
                    "Karisizo",
                    "Murindwa",
                    "Murusenyi",
                    "Nyakagezi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gahurire",
                  "villages": ["Itambiro", "Rebero", "Rugenge", "Umuyange"]
                },
                {
                  "type": "CELLS",
                  "name": "Karama",
                  "villages": [
                    "Kabimba",
                    "Kagusa",
                    "Karenge",
                    "Mpandu",
                    "Rango"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kinyonzo",
                  "villages": ["Amabumba", "Kibimba", "Rugarama", "Tunduti"]
                },
                {
                  "type": "CELLS",
                  "name": "Umukamba",
                  "villages": ["Akabaya", "Kagarama", "Kazo", "Umukamba"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kibungo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyasemakamba",
                  "villages": [
                    "Amarembo",
                    "Bwiza",
                    "Gatoro",
                    "Kabeza",
                    "Kiruhura",
                    "Rubimba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gahima",
                  "villages": [
                    "Gasoro",
                    "Karenge",
                    "Kazeneza",
                    "Nyamigina",
                    "Rutovu",
                    "Rwamihuro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatonde",
                  "villages": [
                    "Karungu",
                    "Misange",
                    "Nyagakizi",
                    "Nyagatovu",
                    "Nyakabungo",
                    "Rubona"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karenge",
                  "villages": [
                    "Amahoro",
                    "Gatare",
                    "Ihuriro",
                    "Isangano",
                    "Kabeza",
                    "Musamvu",
                    "Ubumwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mahango",
                  "villages": [
                    "Gisaka",
                    "Kabimba",
                    "Kacyiru",
                    "Karambi",
                    "Rebezo",
                    "Ruhinga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mugesera",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Akabungo",
                  "villages": [
                    "Agakindo",
                    "Akabingo",
                    "Kinihira",
                    "Nyamirambo",
                    "Rugarama",
                    "Rurenge",
                    "Rwinkwavu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mugatare",
                  "villages": [
                    "Icocorero",
                    "Ikibinge",
                    "Isangano",
                    "Kampara",
                    "Kumunini",
                    "Kumuyange",
                    "Mumurenge",
                    "Rwamenyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ntanga",
                  "villages": [
                    "Akabande",
                    "Akabeza",
                    "Akinteko",
                    "Ikiyovu",
                    "Murambi",
                    "Rugaju",
                    "Urukoki"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamugari",
                  "villages": [
                    "Gisenyi",
                    "Gishandaro",
                    "Kimanama",
                    "Nyamabuye",
                    "Rwarutare",
                    "Ubuhanira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyange",
                  "villages": [
                    "Agatare",
                    "Gomezo",
                    "Ntarama",
                    "Nunga",
                    "Rugazi",
                    "Rusave",
                    "Rwamibari"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Murama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gitaraga",
                  "villages": [
                    "Gitaraga",
                    "Kizenga",
                    "Ntara",
                    "Nyagahura",
                    "Nyakabanga",
                    "Rukizi",
                    "Tonero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigabiro",
                  "villages": [
                    "Cyeru",
                    "Kaboza",
                    "Kigabiro",
                    "Murutare",
                    "Mutara",
                    "Nyagasozi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mvumba",
                  "villages": [
                    "Gitesanyi",
                    "Kibimba",
                    "Kiyagara",
                    "Mvumba",
                    "Nyakagezi",
                    "Nyarwanya",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rurenge",
                  "villages": [
                    "Gashanda",
                    "Gasibya",
                    "Gatoma",
                    "Gitaba",
                    "Kabeza",
                    "Kambuto",
                    "Kanyinya",
                    "Kaziba",
                    "Kurutare",
                    "Muguruka",
                    "Murambi",
                    "Ruvuzi",
                    "Ruzinga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sakara",
                  "villages": [
                    "Agatonde",
                    "Kabahushi",
                    "Kakahi",
                    "Kavumu",
                    "Kukarenge",
                    "Mukibara",
                    "Nyagataba",
                    "Nyamirembe",
                    "Rwabuconco",
                    "Sagatare",
                    "Urubare"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mutenderi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Karwema",
                  "villages": ["Cyanamo", "Gitesanyi", "Meraneza", "Musenyi"]
                },
                {
                  "type": "CELLS",
                  "name": "Kibare",
                  "villages": [
                    "Kabombo",
                    "Mutukura",
                    "Ndarage",
                    "Rwakaza",
                    "Rwankamba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mutenderi",
                  "villages": [
                    "Agatonde",
                    "Akarimbu",
                    "Cyanyunga",
                    "Kibaya",
                    "Tonero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muzingira",
                  "villages": [
                    "Gatonde",
                    "Rusave",
                    "Rwakandari",
                    "Shyagashya",
                    "Umuyange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagasozi",
                  "villages": ["Nyagasozi", "Nyamirindi", "Nyamugari"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Remera",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bugera",
                  "villages": [
                    "Gasebeya",
                    "Gatare",
                    "Gisunzu",
                    "Kabeza",
                    "Kiyovu",
                    "Kumukiza",
                    "Munini I",
                    "Munini II",
                    "Nkenke",
                    "Rubumba",
                    "Rwesero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kinunga",
                  "villages": [
                    "Kabeza",
                    "Kamvumba",
                    "Kigaga",
                    "Murambi",
                    "Nyarugenge",
                    "Urusagara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ndekwe",
                  "villages": [
                    "Gikomero",
                    "Icyakabiri",
                    "Rugando",
                    "Ruhuha",
                    "Rukore",
                    "Rwamutabazi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamagana",
                  "villages": [
                    "Bukiranzuki",
                    "Kabuye",
                    "Kaguruka",
                    "Kinanira",
                    "Nyakabingo",
                    "Rebero",
                    "Rubimba",
                    "Ruhama",
                    "Ryinteko",
                    "Tonero"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rukira",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buliba",
                  "villages": [
                    "Dagaza",
                    "Gatare",
                    "Kabeza",
                    "Kanzenze",
                    "Kibande",
                    "Kibimba",
                    "Rugaragara",
                    "Rurama",
                    "Rwakimanzi",
                    "Rwavuguta",
                    "Sangano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibatsi",
                  "villages": [
                    "Agatare",
                    "Bweranka",
                    "Gahushyi",
                    "Gituku",
                    "Kagarama",
                    "Kibimba",
                    "Korandebe",
                    "Munezero",
                    "Nyamabuye",
                    "Rubagabaga",
                    "Rusenyi",
                    "Rwanyineka",
                    "Terimbere"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyaruvumu",
                  "villages": [
                    "Amahoro",
                    "Cyamahehe",
                    "Gafunzo",
                    "Gatare",
                    "Isangano",
                    "Nyagataba",
                    "Rugenge",
                    "Terimbere"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyinya",
                  "villages": [
                    "Cyabayagara",
                    "Kabimba",
                    "Karuruma",
                    "Kibimba",
                    "Mirambi",
                    "Rugarama",
                    "Ruhama",
                    "Rwagakobe",
                    "Rwagishanga",
                    "Rwamukobwa"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rukumberi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gituza",
                  "villages": ["Gitesanyi", "Gituza", "Mfune", "Ruyenzi"]
                },
                {
                  "type": "CELLS",
                  "name": "Ntovi",
                  "villages": [
                    "Iyantende",
                    "Kigese",
                    "Mugwato",
                    "Ntovi",
                    "Rukumberi",
                    "Rwamibabi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubago",
                  "villages": [
                    "Akabungo",
                    "Kavumve",
                    "Nyagakizi",
                    "Nyagitabire",
                    "Rubago"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubona",
                  "villages": [
                    "Kagarama",
                    "Maswa I",
                    "Maswa II",
                    "Rugenda I",
                    "Rugenda II",
                    "Ruyenzi I"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwintashya",
                  "villages": [
                    "Bare",
                    "Karokora",
                    "Rwimpongo I",
                    "Rwimpongo II",
                    "Shyembe"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rurenge",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Akagarama",
                  "villages": [
                    "Kuwimana",
                    "Mukibimba",
                    "Rwanyamuhinda",
                    "Umurambi",
                    "Rugazi",
                    "Uruyenzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhurire",
                  "villages": [
                    "Agatonero",
                    "Gashinya",
                    "Gisunzu",
                    "Gitobe",
                    "Nyamata"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musya",
                  "villages": [
                    "Inteko",
                    "Kabimba",
                    "Kamugundu",
                    "Karama",
                    "Runazi",
                    "Rwasaburo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugese",
                  "villages": [
                    "Kajevuba",
                    "Kamwiru",
                    "Kiyanja",
                    "Kumunini",
                    "Nyamigende",
                    "Rugarika",
                    "Rwakanuma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rujambara",
                  "villages": [
                    "Akarambaraye",
                    "Kabeza",
                    "Mashyoza",
                    "Mbonwa",
                    "Nyabagaza",
                    "Urusagara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwikubo",
                  "villages": [
                    "Akabakanda",
                    "Amashya",
                    "Kabashumba",
                    "Kigarama",
                    "Kivugangoma",
                    "Ruhuha",
                    "Rwaromba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Sake",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gafunzo",
                  "villages": [
                    "Cyanika",
                    "Gatare",
                    "Icyizanye",
                    "Isovu",
                    "Kiriko",
                    "Kumurenge",
                    "Mabuga I",
                    "Mabuga II",
                    "Nyakagezi",
                    "Rwanyabiranga",
                    "Rwumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibonde",
                  "villages": [
                    "Kabare",
                    "Karenge",
                    "Kidakama",
                    "Murama",
                    "Nkingi",
                    "Nyagasani",
                    "Umucyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkanga",
                  "villages": [
                    "Agatare",
                    "Akabira",
                    "Bukokoza",
                    "Gisera",
                    "Iryarurengo",
                    "Kanazi",
                    "Mizibiri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukoma",
                  "villages": [
                    "Akagoma",
                    "Irebero",
                    "Isangano",
                    "Muminoga",
                    "Musenyi",
                    "Nyagasozi",
                    "Nyakariba",
                    "Nyarurembo",
                    "Umukoni"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Zaza",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Nyagasozi",
                  "villages": [
                    "Agatare",
                    "Akabeza",
                    "Akabuga",
                    "Igifurere",
                    "Ikiyovu",
                    "Rebero",
                    "Isanganiro",
                    "Rubati",
                    "Rwanshuro",
                    "Rwimbirwa",
                    "Sugira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagatugunda",
                  "villages": [
                    "Akanyinya",
                    "Amahoro",
                    "Cyerwa",
                    "Cyizihira",
                    "Itonero",
                    "Jyambere",
                    "Kabonero",
                    "Kirira",
                    "Kizenga",
                    "Kumuyange",
                    "Nyagatugunda",
                    "Nyakabanda",
                    "Nyakabande",
                    "Nyarurembo",
                    "Rebero",
                    "Rugarama",
                    "Rushubi",
                    "Rwezibamba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhembe",
                  "villages": [
                    "Agasave",
                    "Ituze",
                    "Kabeza",
                    "Kacyiru",
                    "Karenge",
                    "Kumunini",
                    "Makoma",
                    "Mpembwe",
                    "Nyagahinga",
                    "Nyaruteja",
                    "Rugarama",
                    "Rushubi",
                    "Urutare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhinga",
                  "villages": [
                    "Agataba",
                    "Akabungo",
                    "Busasamana",
                    "Gasebeya",
                    "Isangano",
                    "Kagarama",
                    "Nyagahandagazi",
                    "Nyakariba",
                    "Rwakagina",
                    "Sangaza",
                    "Ubumwe",
                    "Umukoma",
                    "Umuvugangoma"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Nyagatare",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Gatunda",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyagaju",
                  "villages": [
                    "Hanganyundo",
                    "Iramiro",
                    "Isangano",
                    "Kabeza",
                    "Kibisabo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabeza",
                  "villages": [
                    "Huriro",
                    "Kabeza",
                    "Muvumba",
                    "Muyenzi",
                    "Nyamirambo",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamikamba",
                  "villages": [
                    "Byimana",
                    "Gikunyu",
                    "Gitega",
                    "Gitovu",
                    "Kaburimbo",
                    "Kibuye",
                    "Nyamikamba",
                    "Rwebare",
                    "Ryabuvara",
                    "Ryarukabura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamirembe",
                  "villages": [
                    "Byimana",
                    "Huriro",
                    "Kajevuba",
                    "Kirindimure",
                    "Mabare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyangara",
                  "villages": [
                    "Bugarama",
                    "Kabeza",
                    "Mugomero",
                    "Muhambo",
                    "Mutumba",
                    "Rwimbogo",
                    "Ryanyabugwende"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarurema",
                  "villages": [
                    "Bubare",
                    "Buguma",
                    "Butimba",
                    "Kabeza",
                    "Muhabura",
                    "Nyarurema",
                    "Shabana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwensheke",
                  "villages": ["Kabuye", "Kamate", "Nyiraburunga", "Rwensheke"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Karama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bushara",
                  "villages": [
                    "Bushara Centre",
                    "Ihuriro",
                    "Isangano",
                    "Kadendegeri",
                    "Meshero",
                    "Rurembo",
                    "Uruyenzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyenkwanzi",
                  "villages": [
                    "Cyenkwanzi Centre",
                    "Kabeza",
                    "Kiyovu",
                    "Rurembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gikagati",
                  "villages": [
                    "Bigega",
                    "Gataba",
                    "Gikagati Centre",
                    "Gishenyi",
                    "Kanunga",
                    "Nyabitare",
                    "Nyakibande",
                    "Rurembo",
                    "Rutegamatwi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gikundamvura",
                  "villages": [
                    "Fene",
                    "Gikundamvura I",
                    "Gikundamvura II",
                    "Irebero",
                    "Isangano",
                    "Kukibuye",
                    "Kukimpundu",
                    "Musenyi",
                    "Nyabitare",
                    "Nyagasharara",
                    "Umutara",
                    "Urugwiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Gakukuru",
                    "Kabeza",
                    "Kabuga",
                    "Kizunguruko",
                    "Nyakibande",
                    "Nyamirama",
                    "Rukamba",
                    "Rwebishirira",
                    "Rwubuzizi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ndego",
                  "villages": [
                    "Gakirage",
                    "Kababanda",
                    "Kanyami",
                    "Matereza",
                    "Mishasha",
                    "Murambi",
                    "Mutete",
                    "Ndego",
                    "Rubanda",
                    "Rusoroza",
                    "Rutoma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakiga",
                  "villages": [
                    "Humure",
                    "Kabeza",
                    "Kanunga",
                    "Karama Centre",
                    "Kavumu",
                    "Kentarama",
                    "Mabare"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Karangazi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kamate",
                  "villages": [
                    "Bugarama",
                    "Buhongoro",
                    "Kamate",
                    "Kigazi",
                    "Muzehe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karama",
                  "villages": ["Karama", "Makomo", "Rundiro"]
                },
                {
                  "type": "CELLS",
                  "name": "Kizirakome",
                  "villages": ["Kageyo", "Kahi", "Kizirakome", "Rurebe"]
                },
                {
                  "type": "CELLS",
                  "name": "Mbare",
                  "villages": [
                    "Kabirizi",
                    "Kajumo",
                    "Karohoza",
                    "Mbare",
                    "Rwarucura",
                    "Ryabega"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musenyi",
                  "villages": [
                    "Bwanga",
                    "Gacungiro",
                    "Kabeza",
                    "Musenyi I",
                    "Musenyi II",
                    "Rugarama",
                    "Ruziranyenzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ndama",
                  "villages": ["Akayange", "Ndama", "Rwabiharamba"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagashanga",
                  "villages": ["Bidudu", "Bwera", "Kabare", "Ruhita"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamirama",
                  "villages": [
                    "Kayange I",
                    "Kayange II",
                    "Nkoma I",
                    "Nkoma II",
                    "Nyamirama I",
                    "Nyamirama II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubagabaga",
                  "villages": ["Iraba", "Nkuna", "Nyarutovu", "Rebero"]
                },
                {
                  "type": "CELLS",
                  "name": "Rwenyemera",
                  "villages": [
                    "Bwera",
                    "Imishongi",
                    "Kayishunika",
                    "Kizirakome",
                    "Rwenyana",
                    "Rwenyemera",
                    "Rwimirama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwisirabo",
                  "villages": [
                    "Gakoma",
                    "Humure",
                    "Karangazi",
                    "Rubona",
                    "Rukundo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Katabagemu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bayigaburire",
                  "villages": [
                    "Agasasa",
                    "Bingaro",
                    "Byimana",
                    "Gikandura",
                    "Igikorosi",
                    "Kibuye",
                    "Nyagahandagaza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kaduha",
                  "villages": [
                    "Kaduha I",
                    "Kaduha II",
                    "Kanyinya",
                    "Nyabiyonza",
                    "Urumuri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanyeganyege",
                  "villages": ["Kabaya", "Kabeza", "Kanyeganyege", "Rebero"]
                },
                {
                  "type": "CELLS",
                  "name": "Katabagemu",
                  "villages": [
                    "Gashenyi",
                    "Kagogo",
                    "Kajevuba",
                    "Kigarama",
                    "Nyabwunyu",
                    "Umunanira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigarama",
                  "villages": [
                    "Kanguka",
                    "Kibuye",
                    "Kigarama",
                    "Rebero",
                    "Shirimpumu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakigando",
                  "villages": [
                    "Byimana",
                    "Kabeza",
                    "Kamutara",
                    "Ntoma",
                    "Nyakigando I",
                    "Nyakigando II",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubira",
                  "villages": ["Igitego", "Isangano", "Kanyesunzu", "Rubira"]
                },
                {
                  "type": "CELLS",
                  "name": "Rugazi",
                  "villages": [
                    "Akabira",
                    "Burera",
                    "Ishyirahamwe",
                    "Rwagisangangabo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutoma",
                  "villages": [
                    "Buyugi",
                    "Kabeza",
                    "Mahoro",
                    "Rutoma",
                    "Ryaruganzu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kiyombe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gataba",
                  "villages": [
                    "Cyemiyaga",
                    "Gahama",
                    "Gicuba",
                    "Kwiperu",
                    "Nyakabungo",
                    "Nyamiyaga",
                    "Ruhonwa",
                    "Ruhuha",
                    "Rutete",
                    "Rwabashanja",
                    "Rwakikunengwa",
                    "Rwebare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitenga",
                  "villages": [
                    "Gitenga",
                    "Izinga",
                    "Kabingo",
                    "Kibuye",
                    "Muhambo",
                    "Mukasha",
                    "Nyabubare",
                    "Rwagakuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabungo",
                  "villages": [
                    "Bitare",
                    "Cyondo",
                    "Gatoki",
                    "Gorora",
                    "Kindege",
                    "Manombe",
                    "Mataba",
                    "Murambi",
                    "Nyakabungo",
                    "Rugarama",
                    "Rwamiko",
                    "Rwamushe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambo",
                  "villages": [
                    "Bureka",
                    "Butehe",
                    "Kakagaju",
                    "Karujanga",
                    "Kinoga",
                    "Kitaburimbi",
                    "Nkana",
                    "Nyakabungo",
                    "Rugarama",
                    "Rwakashande",
                    "Rwemisavu",
                    "Rwengugwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karujumba",
                  "villages": [
                    "Gishoro",
                    "Kabare",
                    "Kagorogoro",
                    "Kajevuba",
                    "Karujumba Centre",
                    "Katoma",
                    "Kenzizi",
                    "Mushesha",
                    "Mweneno",
                    "Ngangare",
                    "Nyabwongoroka",
                    "Nyange",
                    "Rukongoro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Tovu",
                  "villages": [
                    "Cyerero",
                    "Gashuro",
                    "Gasyata",
                    "Gatyazo",
                    "Nyagatete",
                    "Nyakigera",
                    "Nyamirima",
                    "Nyaruziba",
                    "Rugarama",
                    "Rutungo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Matimba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bwera",
                  "villages": ["Bwera", "Ntoma", "Rugaga"]
                },
                {
                  "type": "CELLS",
                  "name": "Byimana",
                  "villages": [
                    "Byimana I",
                    "Byimana II",
                    "Byimana III",
                    "Kabuga I",
                    "Kabuga II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyembogo",
                  "villages": ["Byimana", "Kabeza", "Kamahoro", "Kiyovu"]
                },
                {
                  "type": "CELLS",
                  "name": "Kagitumba",
                  "villages": [
                    "Gishara",
                    "Kagera",
                    "Kagitumba",
                    "Kamabuye",
                    "Munini",
                    "Musenyi",
                    "Muvumba",
                    "Nziranziza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanyonza",
                  "villages": [
                    "Gakoma",
                    "Musebeya",
                    "Musha",
                    "Nyampeke",
                    "Rukundo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Matimba",
                  "villages": [
                    "Umudugudu Wa I",
                    "Umudugudu Wa II",
                    "Umudugudu Wa III",
                    "Umudugudu Wa IV",
                    "Umudugudu Wa V",
                    "Umudugudu Wa VI",
                    "Umudugudu Wa VII"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabwishongwezi",
                  "villages": [
                    "Nyabwishongwezi I",
                    "Nyabwishongwezi II",
                    "Nyabwishongwezi III"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwentanga",
                  "villages": [
                    "Kagezi I",
                    "Kagezi II",
                    "Mitayayo I",
                    "Mitayayo II",
                    "Rwentanga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mimuri",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bibare",
                  "villages": [
                    "Bibare",
                    "Karukwanzi",
                    "Nyakagenge",
                    "Nyamafura",
                    "Nyaruziba",
                    "Rwimirama",
                    "Urugano",
                    "Urutambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gakoma",
                  "villages": [
                    "Gakoma",
                    "Gisenyi",
                    "Kanyinya",
                    "Kumusaraba",
                    "Nyagahandagaza",
                    "Nyarwina",
                    "Rusororo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mahoro",
                  "villages": [
                    "Cyabwana",
                    "Gitwe",
                    "Iterambere",
                    "Kabeza",
                    "Mizero",
                    "Nyabugogo",
                    "Nyagahita",
                    "Rebero",
                    "Rubumba",
                    "Shenga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mimuri",
                  "villages": [
                    "Byimana",
                    "Indahemuka",
                    "Isangano",
                    "Karukwanzi",
                    "Rebero",
                    "Rwimirama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugari",
                  "villages": [
                    "Amahoro",
                    "Isangano",
                    "Nteko",
                    "Rebero",
                    "Ubumwe",
                    "Urumuri"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mukama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bufunda",
                  "villages": [
                    "Bitabo",
                    "Bufunda",
                    "Kibihanga",
                    "Nyakajeje",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatete",
                  "villages": [
                    "Gatete I",
                    "Gatete II",
                    "Hunga",
                    "Kazinga",
                    "Rutete",
                    "Ryandahuka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gihengeri",
                  "villages": [
                    "Butare",
                    "Butwaro",
                    "Gashahi",
                    "Gihengeri",
                    "Gishoro",
                    "Kabongoya I",
                    "Kabongoya II",
                    "Kigarama",
                    "Nyarubuye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gishororo",
                  "villages": [
                    "Akinyambo",
                    "Byumba",
                    "Kabeza",
                    "Kabukunzi",
                    "Kisaro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagina",
                  "villages": [
                    "Cyabahurura",
                    "Kagonga",
                    "Kireranyana",
                    "Ngoma",
                    "Nyagatare",
                    "Nyakagarama",
                    "Nyakarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugarama",
                  "villages": [
                    "Bukire",
                    "Byimana",
                    "Kibondo",
                    "Kireranyana",
                    "Nyacyonga",
                    "Nyakagarama",
                    "Sipure"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Musheri",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kibirizi",
                  "villages": ["Kabungo", "Kibirizi", "Nyamenge", "Nyamisange"]
                },
                {
                  "type": "CELLS",
                  "name": "Kijojo",
                  "villages": ["Kagwegwe", "Kanyinya", "Kijojo", "Rwakabungo"]
                },
                {
                  "type": "CELLS",
                  "name": "Musheri",
                  "villages": ["Gakiri", "Kiyaza", "Mugari", "Musheri"]
                },
                {
                  "type": "CELLS",
                  "name": "Ntoma",
                  "villages": [
                    "Bikonoka",
                    "Murisanga",
                    "Ntoma",
                    "Rukundo",
                    "Rutarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagatabire",
                  "villages": [
                    "Gikunyu",
                    "Mushorerwa",
                    "Nyagatabire",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamiyonga",
                  "villages": [
                    "Cyenombe",
                    "Isangano",
                    "Nyamiyonga",
                    "Shirimpumu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugarama I",
                  "villages": ["Humure", "Karambi", "Karuca", "Nyabyihura"]
                },
                {
                  "type": "CELLS",
                  "name": "Rugarama II",
                  "villages": ["Kibitaka", "Rebero", "Rwenyana", "Umunini"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyagatare",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Barija",
                  "villages": ["Barija A", "Barija B", "Burumba", "Kinihira"]
                },
                {
                  "type": "CELLS",
                  "name": "Bushoga",
                  "villages": [
                    "Bushoga",
                    "Cyabahanga",
                    "Cyonyo",
                    "Ruhuha I",
                    "Ruhuha II",
                    "Ryinkuyu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyabayaga",
                  "villages": [
                    "Akamonyi",
                    "Bihinga",
                    "Cyabayaga",
                    "Nyakabuye",
                    "Urugero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gakirage",
                  "villages": [
                    "Gakirage",
                    "Kiboga I",
                    "Kiboga II",
                    "Mihingo",
                    "Nkongi",
                    "Urumuri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamagiri",
                  "villages": ["Kamagiri", "Karungi", "Nkerenke"]
                },
                {
                  "type": "CELLS",
                  "name": "Nsheke",
                  "villages": ["Kabare", "Nsheke", "Nyegeza"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagatare",
                  "villages": [
                    "Mirama I",
                    "Mirama II",
                    "Nyagatare I",
                    "Nyagatare II",
                    "Nyagatare III"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutaraka",
                  "villages": [
                    "Gihorobwa",
                    "Mugari",
                    "Nkonji",
                    "Rutaraka",
                    "Ryabega"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ryabega",
                  "villages": ["Marongero", "Rugendo", "Ryabega"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rukomo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gahurura",
                  "villages": [
                    "Amahoro",
                    "Busasamana",
                    "Isangano",
                    "Nomero I",
                    "Rambura",
                    "Ruyonza",
                    "Ubumwe",
                    "Urugwiro",
                    "Urukundo",
                    "Urumuri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gashenyi",
                  "villages": [
                    "Agasasa",
                    "Bukamba",
                    "Gashenyi",
                    "Gisenyi",
                    "Huriro",
                    "Isangano",
                    "Kiyovu",
                    "Murore",
                    "Nyamirambo",
                    "Rebero",
                    "Rukomo",
                    "Rurembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakagarama",
                  "villages": [
                    "Akamashama",
                    "Akamasheka",
                    "Amahoro",
                    "Amizero",
                    "Gashenyi",
                    "Gashura",
                    "Isangano",
                    "Karugondo",
                    "Kayenzi",
                    "Musenyi",
                    "Nyakagarama",
                    "Nyamworoma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukomo II",
                  "villages": [
                    "Amahoro",
                    "Berwa",
                    "Isangano",
                    "Kabeza",
                    "Mwurirwa",
                    "Nyange",
                    "Nyarubuye",
                    "Nyarurama",
                    "Rebero",
                    "Rugabano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rurenge",
                  "villages": [
                    "Akajuka",
                    "Benishyaka",
                    "Biryogo",
                    "Kabeza",
                    "Kabusunzu",
                    "Nyabwunyu",
                    "Nyamirambo",
                    "Rurenge",
                    "Rushashi",
                    "Rwiju"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rwempasha",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyenjonjo",
                  "villages": ["Cyenjonjo I", "Cyenjonjo II", "Rutare II"]
                },
                {
                  "type": "CELLS",
                  "name": "Gasinga",
                  "villages": ["Gasinga", "Nyendo", "Rwibishorogoto"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabare",
                  "villages": ["Gituro", "Kabare", "Ururimbi"]
                },
                {
                  "type": "CELLS",
                  "name": "Kazaza",
                  "villages": ["Gakindo", "Kazaza", "Rukiri"]
                },
                {
                  "type": "CELLS",
                  "name": "Mishenyi",
                  "villages": ["Gicwamba", "Kinungu", "Mishenyi"]
                },
                {
                  "type": "CELLS",
                  "name": "Rugarama",
                  "villages": ["Bubare", "Rugarama"]
                },
                {
                  "type": "CELLS",
                  "name": "Rukorota",
                  "villages": ["Bukonji", "Rukorota"]
                },
                {
                  "type": "CELLS",
                  "name": "Rutare",
                  "villages": ["Mashaka", "Nshuli", "Rutare"]
                },
                {
                  "type": "CELLS",
                  "name": "Rwempasha",
                  "villages": ["Nyarubare", "Rwahi", "Rwempasha", "Uwinkiko"]
                },
                {
                  "type": "CELLS",
                  "name": "Ryeru",
                  "villages": ["Bweya", "Ryeru"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rwimiyaga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gacundezi",
                  "villages": [
                    "Bugaragara",
                    "Gacundezi I",
                    "Gacundezi II",
                    "Rukundo I",
                    "Rukundo II",
                    "Rukundo III"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabeza",
                  "villages": [
                    "Gatovu",
                    "Kabeza",
                    "Kabeza Centre",
                    "Kavumu",
                    "Rugarama",
                    "Rukiri I",
                    "Rukiri II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kirebe",
                  "villages": ["Gatebe I", "Gatebe II", "Kirebe", "Rukindo"]
                },
                {
                  "type": "CELLS",
                  "name": "Ntoma",
                  "villages": [
                    "Gashwenu",
                    "Kibuye",
                    "Kimaramu",
                    "Nyampire",
                    "Rwembogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarupfubire",
                  "villages": [
                    "Kamagiri",
                    "Nyakagando I",
                    "Nyakagando II",
                    "Nyarupfubire I",
                    "Nyarupfubire II",
                    "Rwimiyaga I",
                    "Rwimiyaga II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyendo",
                  "villages": ["Isangano", "Nyamirama", "Rebero", "Remera"]
                },
                {
                  "type": "CELLS",
                  "name": "Rutungu",
                  "villages": [
                    "Bwera",
                    "Cyamunyana",
                    "Gakagati I",
                    "Gakagati II",
                    "Rubira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwimiyaga",
                  "villages": [
                    "Byimana",
                    "Gakoma",
                    "Kizungu",
                    "Mahoro",
                    "Muyange",
                    "Rebero",
                    "Rwinyange"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Tabagwe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gishuro",
                  "villages": [
                    "Gatoma",
                    "Kaborogota",
                    "Kayanja",
                    "Nyagatare",
                    "Nyasine"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitengure",
                  "villages": [
                    "Bitibyoma",
                    "Gitengure",
                    "Kayigiro",
                    "Nshuri",
                    "Nyagasigati"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkoma",
                  "villages": [
                    "Agafaru",
                    "Ibare",
                    "Kabeza",
                    "Kaduha",
                    "Kigando",
                    "Mutozo",
                    "Nkoma",
                    "Rugabano",
                    "Runyinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabitekeri",
                  "villages": [
                    "Kabeza",
                    "Kabirizi",
                    "Kamate",
                    "Kangoma",
                    "Kiyovu",
                    "Munini"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagatoma",
                  "villages": [
                    "Agafaro",
                    "Agasongero",
                    "Akajevuba",
                    "Kabusunzu",
                    "Mutungisa",
                    "Runyeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shonga",
                  "villages": [
                    "Gikoba",
                    "Nyakanoni",
                    "Nyakigando",
                    "Rwubuzizi",
                    "Shonga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Tabagwe",
                  "villages": [
                    "Gakamba",
                    "Gasheshe",
                    "Kagarama",
                    "Nyenyeri",
                    "Tabagwe"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Rwamagana",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Fumbwe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Mununu",
                  "villages": [
                    "Cyingara",
                    "Janjagiro",
                    "Kabeza",
                    "Kabuga",
                    "Ndinda",
                    "Nyirabiteri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagasambu",
                  "villages": [
                    "Mataba",
                    "Rambura",
                    "Rebero",
                    "Rugarama",
                    "Rugenge"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakagunga",
                  "villages": ["Akabeza", "Kibaza", "Kirehe", "Rugarama"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamirama",
                  "villages": [
                    "Agatare",
                    "Akagarama",
                    "Bigarama",
                    "Cyarutabana",
                    "Makwandi",
                    "Ntungamo",
                    "Shenga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarubuye",
                  "villages": [
                    "Gihima",
                    "Gitwe",
                    "Kabirizi",
                    "Kivugiza",
                    "Murambi",
                    "Rurembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sasabirago",
                  "villages": [
                    "Birembo",
                    "Byimana",
                    "Irukwaya",
                    "Karambo",
                    "Munini"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gahengeri",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gihumuza",
                  "villages": [
                    "Cyanga",
                    "Gatare",
                    "Kabeza",
                    "Kajevuba",
                    "Nyirabujari",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagezi",
                  "villages": ["Akabuga", "Kabonero", "Rwarugaju", "Samatare"]
                },
                {
                  "type": "CELLS",
                  "name": "Kanyangese",
                  "villages": ["Agakari", "Gatenderi", "Ruhita", "Umunini"]
                },
                {
                  "type": "CELLS",
                  "name": "Kibare",
                  "villages": [
                    "Iramiro",
                    "Kabuye",
                    "Kanserege",
                    "Karutimbo",
                    "Kinyovi",
                    "Rurambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mutamwa",
                  "villages": [
                    "Agasharu",
                    "Kamugasa",
                    "Nyabagaza",
                    "Nyirarwirungu",
                    "Rubonobono",
                    "Rugagi",
                    "Ryasenteteri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugarama",
                  "villages": [
                    "Amatafari",
                    "Byimana",
                    "Mataba",
                    "Nyakiri",
                    "Nyarucyamo",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Runyinya",
                  "villages": [
                    "Akamasasa",
                    "Cyeru",
                    "Gacunshu",
                    "Kabarore",
                    "Karambo",
                    "Kiyovu",
                    "Ruyumba",
                    "Ryamuzuka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rweri",
                  "villages": [
                    "Kabigondo",
                    "Kamurindi",
                    "Akinteko",
                    "Kiruruma",
                    "Mataba",
                    "Nyamugari"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gishali",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Binunga",
                  "villages": ["Busharu", "Nyakivomo", "Rurindimura"]
                },
                {
                  "type": "CELLS",
                  "name": "Bwinsanga",
                  "villages": ["Akanogo", "Mugusha", "Nyakabungo", "Shaburondo"]
                },
                {
                  "type": "CELLS",
                  "name": "Cyinyana",
                  "villages": ["Nyagacyamo", "Nyakagarama", "Ururembo"]
                },
                {
                  "type": "CELLS",
                  "name": "Gati",
                  "villages": ["Agatare", "Nyamabuye", "Umunanira", "Uruhuha"]
                },
                {
                  "type": "CELLS",
                  "name": "Kavumu",
                  "villages": ["Akabuga", "Ingeyo", "Kibonde", "Uruyenzi"]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhimbi",
                  "villages": [
                    "Abakina",
                    "Byimana",
                    "Cyiri",
                    "Rwagahaya",
                    "Umunini"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhunda",
                  "villages": ["Mpungwe", "Nyagahinga", "Nyagakombe"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Karenge",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bicaca",
                  "villages": [
                    "Bicaca",
                    "Cyanyirampazi",
                    "Cyarugaju",
                    "Kabeza",
                    "Kajevuba",
                    "Karuyenzi",
                    "Runzenze"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Byimana",
                  "villages": ["Byimana", "Karambo", "Kiyaya", "Rukori"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabasore",
                  "villages": [
                    "Ipide",
                    "Kabasore",
                    "Migamba",
                    "Nyagatovu",
                    "Ruvomo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kangamba",
                  "villages": [
                    "Byimana",
                    "Kagese",
                    "Kangamba",
                    "Kimarambasa",
                    "Nkongi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karenge",
                  "villages": ["Bwiza", "Karenge", "Ntebe", "Rebero"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabubare",
                  "villages": [
                    "Feri",
                    "Kanyangese",
                    "Nyabubare",
                    "Rwinka",
                    "Ryamugabo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamatete",
                  "villages": [
                    "Cyerwa",
                    "Mutabo",
                    "Ndengo",
                    "Nyagasenyi",
                    "Nyakabuye",
                    "Nyamatete"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kigabiro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bwiza",
                  "villages": [
                    "Gitega",
                    "Kagererao",
                    "Munini",
                    "Nyakabande",
                    "Rutaka",
                    "Rutonde",
                    "Rweza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyanya",
                  "villages": [
                    "Bigabiro",
                    "Biraro",
                    "Busanza",
                    "Cyahafi",
                    "Kabeza",
                    "Kabuye",
                    "Kamata",
                    "Karuhayi",
                    "Karutimbo",
                    "Rurembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagasenyi",
                  "villages": [
                    "Gahonogo",
                    "Kavura",
                    "Kayenzi",
                    "Kigega",
                    "Kirehe",
                    "Ramba",
                    "Rusave",
                    "Umuganura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sibagire",
                  "villages": [
                    "Bacyoro",
                    "Bugugu",
                    "Cyimpima",
                    "Gasharu",
                    "Kabuga",
                    "Kamanga",
                    "Miyange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sovu",
                  "villages": [
                    "Cyaruhogo",
                    "Gatare",
                    "Kiruhura",
                    "Nyabishunzi",
                    "Rugobagoba",
                    "Rushangara"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muhazi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Byeza",
                  "villages": ["Gatobotobo", "Kabeza", "Nyarukombe"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabare",
                  "villages": ["Birembo", "Ubwiza", "Umunini", "Uwimanzi"]
                },
                {
                  "type": "CELLS",
                  "name": "Karambi",
                  "villages": ["Gahengeri", "Kayenzi", "Kinunga", "Ragwe"]
                },
                {
                  "type": "CELLS",
                  "name": "Karitutu",
                  "villages": [
                    "Agatare",
                    "Cyeru",
                    "Karambo",
                    "Kingondo",
                    "Nyarugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kitazigurwa",
                  "villages": ["Byimana", "Gasharu", "Kabirizi", "Karwiru"]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": ["Gasharu", "Kabusunzu", "Nyendo", "Yabaranda"]
                },
                {
                  "type": "CELLS",
                  "name": "Nsinda",
                  "villages": ["Akabeza", "Kibare", "Rubirizi"]
                },
                {
                  "type": "CELLS",
                  "name": "Ntebe",
                  "villages": ["Amagaju", "Urugero", "Urugwiro"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarusange",
                  "villages": [
                    "Akagarama",
                    "Akatorero",
                    "Gahondo",
                    "Kanywiriri",
                    "Kavura",
                    "Kidogo",
                    "Mpinga",
                    "Plage",
                    "Umubuga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Munyaga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kaduha",
                  "villages": [
                    "Gishike",
                    "Kababero",
                    "Kabare",
                    "Kamamana",
                    "Kangabo",
                    "Kigabiro",
                    "Rwakigara",
                    "Rwimbogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkungu",
                  "villages": [
                    "Kabuye",
                    "Kiryango",
                    "Mataba",
                    "Nyagakombe",
                    "Rudashya",
                    "Rushangara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rweru",
                  "villages": [
                    "Birayi",
                    "Gatare",
                    "Kabingo",
                    "Kanyegera",
                    "Mubuga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Zinga",
                  "villages": ["Cyinganzwa", "Kabazeyi", "Karambo", "Rwisange"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Munyiginya",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Binunga",
                  "villages": [
                    "Irebero",
                    "Isangano",
                    "Kabeza",
                    "Umuhumuro",
                    "Urugwiza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bwana",
                  "villages": [
                    "Kabuye",
                    "Kiruhura",
                    "Rutembo",
                    "Rwagahigi",
                    "Rwamugurusu",
                    "Rweza",
                    "Umurinzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyarukamba",
                  "villages": ["Kabenda", "Kagarama", "Ndago", "Rweza"]
                },
                {
                  "type": "CELLS",
                  "name": "Cyimbazi",
                  "villages": ["Agatare", "Akabuye", "Ntunga", "Nyagakombe"]
                },
                {
                  "type": "CELLS",
                  "name": "Nkomangwa",
                  "villages": [
                    "Bakannyi",
                    "Kabuye",
                    "Karubisha",
                    "Nyagahanga",
                    "Ryamirenge"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarubuye",
                  "villages": [
                    "Babasha",
                    "Buyanja",
                    "Kabeza",
                    "Kimara",
                    "Kiyovu",
                    "Mazinga",
                    "Nkindi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Musha",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Akabare",
                  "villages": [
                    "Akabare",
                    "Binunga",
                    "Budahigwa",
                    "Duha",
                    "Gashikiri",
                    "Rugabano",
                    "Rukombe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Budahanda",
                  "villages": ["Karambo", "Nyantoki", "Rwabiyange"]
                },
                {
                  "type": "CELLS",
                  "name": "Kagarama",
                  "villages": [
                    "Kagarama",
                    "Kiruhura",
                    "Muhogoto",
                    "Nyagacyamo",
                    "Nyamigano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musha",
                  "villages": [
                    "Gatika",
                    "Kadasumbwa",
                    "Karifuru",
                    "Nyakiriba",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabisindu",
                  "villages": [
                    "Agashuhe",
                    "Busanza",
                    "Bwiza",
                    "Nyabisindu",
                    "Rujumbura",
                    "Rwamivu",
                    "Umunini"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakabanda",
                  "villages": ["Bitsibo", "Ruhita", "Rutoma"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muyumbu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Akinyambo",
                  "villages": [
                    "Akubugingo",
                    "Kampigika",
                    "Rugarama",
                    "Ryabaheshwa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bujyujyu",
                  "villages": [
                    "Gatare",
                    "Gishaka",
                    "Kabeza",
                    "Kagona",
                    "Karama",
                    "Rebero",
                    "Rubaza",
                    "Rusave",
                    "Yeruzalemu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murehe",
                  "villages": [
                    "Bitega",
                    "Kajororo",
                    "Kayigi",
                    "Miyove",
                    "Murehe",
                    "Ruvomo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ntebe",
                  "villages": [
                    "Gakomeye",
                    "Gasave",
                    "Gisenyi",
                    "Kabagabo",
                    "Kajevuba",
                    "Kanyinya",
                    "Nyarubambo",
                    "Samuramba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarukombe",
                  "villages": [
                    "Gatuza",
                    "Gitaraga",
                    "Gituza",
                    "Kinunga",
                    "Marembo",
                    "Mugogo",
                    "Mumena",
                    "Rubona"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mwulire",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bicumbi",
                  "villages": [
                    "Bicumbi",
                    "Gasharu",
                    "Karama",
                    "Manene",
                    "Nyagihanga",
                    "Rwimbogo",
                    "Sabusaro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bushenyi",
                  "villages": [
                    "Byange",
                    "Kabahima",
                    "Kangaruye",
                    "Rebero",
                    "Rubiha",
                    "Ruseke"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwulire",
                  "villages": [
                    "Cyome",
                    "Gisanza",
                    "Akagarama",
                    "Kigabiro",
                    "Mpinga",
                    "Munini I",
                    "Munini II",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ntunga",
                  "villages": [
                    "Cyimbazi",
                    "Kabacuzi",
                    "Kadasumbwa",
                    "Karuzigura",
                    "Kiyovu",
                    "Nkira",
                    "Ntunga",
                    "Rugarama",
                    "Rugenge"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyakaliro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bihembe",
                  "villages": [
                    "Bihembe",
                    "Busimbuzi",
                    "Butare",
                    "Kabere",
                    "Kanyangese",
                    "Mubumbwe",
                    "Ngarama",
                    "Rusheshe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatare",
                  "villages": [
                    "Gatare",
                    "Karogo",
                    "Kigina",
                    "Runzenze",
                    "Samuduha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gishore",
                  "villages": [
                    "Gishore",
                    "Kagarama",
                    "Matyazo",
                    "Nyirabuhene",
                    "Rugende",
                    "Ruhanika",
                    "Rusagara",
                    "Rusave",
                    "Rususa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munini",
                  "villages": [
                    "Akamasatura",
                    "Munini",
                    "Nyakagarama",
                    "Nyarurembo",
                    "Nyarutovu",
                    "Nyiramitemeri",
                    "Rwamibungo",
                    "Rwankacari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwimbogo",
                  "villages": [
                    "Cyaruhinda",
                    "Kamashaza",
                    "Kasemanyana",
                    "Kimicanga",
                    "Nduba",
                    "Nduhuye",
                    "Rwimbogo",
                    "Ryarurindo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nzige",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Akanzu",
                  "villages": [
                    "Akanzige",
                    "Akanzu",
                    "Cyahafi",
                    "Cyerwa",
                    "Gikoni",
                    "Gitanu",
                    "Kiyovu",
                    "Nyarugenge"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigarama",
                  "villages": [
                    "Gisenyi",
                    "Kajevuba",
                    "Kamabuye",
                    "Karukannyi",
                    "Mikoni",
                    "Mubuga",
                    "Nyarutovu",
                    "Rugunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murama",
                  "villages": [
                    "Agasharu",
                    "Gatoki",
                    "Kabeza",
                    "Kamakuka",
                    "Kibabara",
                    "Ndinda",
                    "Nyarusange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugarama",
                  "villages": [
                    "Bicaca",
                    "Bitega",
                    "Kayibanda",
                    "Nyabugogo",
                    "Ruvomo",
                    "Rwagatsama"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rubona",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Byinza",
                  "villages": [
                    "Bidudu",
                    "Gitwa",
                    "Kabayange I",
                    "Kabayange II",
                    "Mumahoro",
                    "Munini",
                    "Umumeyu",
                    "Uwadesa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabatasi",
                  "villages": [
                    "Agasharu",
                    "Gitaraga",
                    "Kabuye",
                    "Kibabara",
                    "Kiboha",
                    "Midahandwa",
                    "Mitari",
                    "Nyagatare",
                    "Rusenyi",
                    "Umurehe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuye",
                  "villages": ["Agatare", "Cyamuyango", "Rubumba", "Rutare"]
                },
                {
                  "type": "CELLS",
                  "name": "Karambi",
                  "villages": [
                    "Bigaga",
                    "Byobo",
                    "Karambi",
                    "Mataba",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mabare",
                  "villages": [
                    "Amarimba",
                    "Bitare",
                    "Gasharu",
                    "Nyamabuye",
                    "Rubirizi",
                    "Rusanza",
                    "Umubuga",
                    "Urugwiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nawe",
                  "villages": ["Cyiri", "Gaseke", "Rudashya"]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "type": "PROVINCE",
      "name": "Kigali",
      "districts": [
        {
          "type": "DISTRICT",
          "name": "Gasabo",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Bumbogo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kinyaga",
                  "villages": [
                    "Akakaza",
                    "Kigarama",
                    "Kingabo",
                    "Muhozi",
                    "Rubungo",
                    "Ryakigogo",
                    "Zindiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musave",
                  "villages": [
                    "Kagarama",
                    "Kayumba",
                    "Ramba",
                    "Rebero",
                    "Rugando"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mvuzo",
                  "villages": [
                    "Kigabiro",
                    "Kiyoro",
                    "Murarambo",
                    "Nkona",
                    "Nyakabingo",
                    "Rukoma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngara",
                  "villages": [
                    "Birembo",
                    "Gisasa",
                    "Munini",
                    "Ruhinga",
                    "Uwaruraza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkuzuzu",
                  "villages": [
                    "Akabenejuru",
                    "Akasedogo",
                    "Akimpama",
                    "Burima",
                    "Kityazo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabikenke",
                  "villages": [
                    "Bushya",
                    "Gikumba",
                    "Kamutamu",
                    "Karama",
                    "Kayenzi",
                    "Kigara",
                    "Kiriza",
                    "Masizi",
                    "Mbogo",
                    "Nyampamo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagasozi",
                  "villages": [
                    "Akanyiramugarura",
                    "Akigabiro",
                    "Gishaka",
                    "Kabuye",
                    "Mpabwa",
                    "Nyagasambu",
                    "Urutarishonga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gatsata",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Karuruma",
                  "villages": [
                    "Akamamana",
                    "Akimihigo",
                    "Bigega",
                    "Busasamana",
                    "Kingasire",
                    "Kumuyange",
                    "Muremera",
                    "Nyagasozi",
                    "Rugoro",
                    "Rwesero",
                    "Tetero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamabuye",
                  "villages": [
                    "Agakomeye",
                    "Gashubi",
                    "Gisiza",
                    "Hanika",
                    "Juru",
                    "Kibaya",
                    "Mpakabavu",
                    "Musango",
                    "Ndengo",
                    "Nyakabande",
                    "Nyakanunga",
                    "Rubonobono",
                    "Runyonza",
                    "Rusoro",
                    "Ruvumero",
                    "Uwagatovu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamugari",
                  "villages": [
                    "Agataramo",
                    "Akamwunguzi",
                    "Akarubimbura",
                    "Akisoko",
                    "Amarembo",
                    "Amizero",
                    "Bwiza",
                    "Ihuriro",
                    "Isangano",
                    "Kanyonyomba",
                    "Nyakariba",
                    "Rwakarihejuru"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gikomero",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasagara",
                  "villages": ["Bwimiyange", "Bwingeyo", "Gasagara", "Rugwiza"]
                },
                {
                  "type": "CELLS",
                  "name": "Gicaca",
                  "villages": ["Ntaganzwa", "Nyagasozi", "Nyagisozi", "Ruganda"]
                },
                {
                  "type": "CELLS",
                  "name": "Kibara",
                  "villages": ["Gahinga", "Gasharu", "Kibobo", "Nombe"]
                },
                {
                  "type": "CELLS",
                  "name": "Munini",
                  "villages": [
                    "Munini",
                    "Mutokerezwa",
                    "Rudakabukirwa",
                    "Runyinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": ["Kimisebeya", "Kivugiza", "Rugarama", "Twina"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gisozi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Musezero",
                  "villages": [
                    "Amajyambere",
                    "Amarembo",
                    "Byimana",
                    "Gasave",
                    "Gasharu",
                    "Kagara",
                    "Nyakariba",
                    "Rwinyana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhango",
                  "villages": [
                    "Kanyinya",
                    "Kumukenke",
                    "Murambi",
                    "Ntora",
                    "Rukeri",
                    "Umurava"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Jabana",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Akamatamu",
                  "villages": [
                    "Akamatamu",
                    "Cyeyere",
                    "Murehe",
                    "Nyacyonga",
                    "Nyagasozi",
                    "Nyarukurazo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bweramvura",
                  "villages": [
                    "Agakenke",
                    "Agatare",
                    "Akinyana",
                    "Gikingo",
                    "Gitega",
                    "Gitenga",
                    "Nyakabingo",
                    "Nyarurama",
                    "Rugogwe",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuye",
                  "villages": [
                    "Amakawa",
                    "Amasangano",
                    "Buliza",
                    "Ihuriro",
                    "Kabeza",
                    "Karuruma",
                    "Murama",
                    "Nyagasozi",
                    "Rebero",
                    "Rugarama",
                    "Tetero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kidashya",
                  "villages": [
                    "Agasekabuye",
                    "Agatare",
                    "Amasangano",
                    "Mubuga",
                    "Nyamweru"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngiryi",
                  "villages": [
                    "Agahama",
                    "Agasharu",
                    "Akabuga",
                    "Jurwe",
                    "Kiberinka",
                    "Nyakirehe",
                    "Nyarubuye",
                    "Rubona",
                    "Rwanyanza",
                    "Uwanyange"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Jali",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Agateko",
                  "villages": [
                    "Bugarama",
                    "Bukamba",
                    "Byimana",
                    "Kabizoza",
                    "Kinunga",
                    "Urunyinya",
                    "Rwankuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Buhiza",
                  "villages": ["Kabande", "Gatare", "Nyamugali", "Nyarubuye"]
                },
                {
                  "type": "CELLS",
                  "name": "Muko",
                  "villages": ["Gahinga", "Gatare", "Umunyinya"]
                },
                {
                  "type": "CELLS",
                  "name": "Nkusi",
                  "villages": [
                    "Agatwa",
                    "Kabagina",
                    "Kajevuba",
                    "Kigarama",
                    "Nyagasayo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabuliba",
                  "villages": [
                    "Nyaburira",
                    "Kirehe",
                    "Mataba",
                    "Nyarurembo",
                    "Rubona"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakabungo",
                  "villages": [
                    "Bwocya",
                    "Gitaba",
                    "Karenge",
                    "Rugina",
                    "Ruhihi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamitanga",
                  "villages": ["Agasharu", "Agatare", "Kabuga", "Runyinya"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kacyiru",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kamatamu",
                  "villages": [
                    "Amajyambere",
                    "Bukinanyana",
                    "Cyimana",
                    "Gataba",
                    "Itetero",
                    "Kabare",
                    "Kamuhire",
                    "Karukamba",
                    "Nyagacyamo",
                    "Rwinzovu",
                    "Urugwiro",
                    "Uruhongore"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamutwa",
                  "villages": [
                    "Agasaro",
                    "Gasharu",
                    "Inkingi",
                    "Kanserege",
                    "Kigugu",
                    "Ruganwa",
                    "Umuco",
                    "Umutekano",
                    "Urugero",
                    "Urwibutso"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibaza",
                  "villages": [
                    "Amahoro",
                    "Bwiza",
                    "Ihuriro",
                    "Ineza",
                    "Inyange",
                    "Iriba",
                    "Kabagari",
                    "Ubumwe",
                    "Umutako",
                    "Urukundo",
                    "Virunga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kimihurura",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kamukina",
                  "villages": [
                    "Inyamibwa",
                    "Isangano",
                    "Isano",
                    "Ituze",
                    "Izuba",
                    "Juru",
                    "Nyenyeri",
                    "Umurava",
                    "Urumuri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kimihurura",
                  "villages": [
                    "Amahoro",
                    "Amajyambere",
                    "Imihigo",
                    "Intambwe",
                    "Mutara",
                    "Rugarama",
                    "Ubumwe",
                    "Umutekano",
                    "Urwego"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugando",
                  "villages": ["Gasange", "Gasasa", "Marembo", "Rebero", "Taba"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kimironko",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bibare",
                  "villages": [
                    "Abatuje",
                    "Amariza",
                    "Imanzi",
                    "Imena",
                    "Imitari",
                    "Inganji",
                    "Ingenzi",
                    "Ingeri",
                    "Inshuti",
                    "Intashyo",
                    "Intwari",
                    "Inyamibwa",
                    "Inyange",
                    "Ubwiza",
                    "Umwezi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibagabaga",
                  "villages": [
                    "Akintwari",
                    "Buranga",
                    "Gasharu",
                    "Ibuhoro",
                    "Kageyo",
                    "Kamahinda",
                    "Karisimbi",
                    "Karongi",
                    "Nyirabwana",
                    "Ramiro",
                    "Rindiro",
                    "Rugero",
                    "Rukurazo",
                    "Urumuri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagatovu",
                  "villages": [
                    "Ibukinanyana",
                    "Ibuhoro",
                    "Ijabiro",
                    "Isangano",
                    "Itetero",
                    "Urugwiro"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kinyinya",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gacuriro",
                  "villages": [
                    "Agatare",
                    "Akanyamugabo",
                    "Akarambo",
                    "Akaruvusha",
                    "Bishikiri",
                    "Cyeru",
                    "Estate 2020",
                    "Kabuhunde II",
                    "Kirira",
                    "Urubanda",
                    "Urugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasharu",
                  "villages": ["Agatare", "Gasharu", "Kami", "Rwankuba"]
                },
                {
                  "type": "CELLS",
                  "name": "Kagugu",
                  "villages": [
                    "Dusenyi",
                    "Gicikiza",
                    "Giheka",
                    "Kabuhunde I",
                    "Kadobogo",
                    "Kagarama",
                    "Muhororo",
                    "Nyakabungo",
                    "Rukingu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murama",
                  "villages": ["Binunga", "Ngaruyinka", "Rusenyi", "Taba"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ndera",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bwiza",
                  "villages": [
                    "Akarwasa",
                    "Akasemuromba",
                    "Bucyemba",
                    "Gasharu",
                    "Mukagarama",
                    "Ruhangare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyaruzinge",
                  "villages": [
                    "Ayabakora",
                    "Cyaruzinge",
                    "Gashure",
                    "Gatare",
                    "Gisura",
                    "Karubibi",
                    "Mulindi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibenga",
                  "villages": [
                    "Bahoze",
                    "Berwa",
                    "Buhoro",
                    "Burunga",
                    "Gitaraga",
                    "Kira",
                    "Nezerwa",
                    "Rugazi",
                    "Runyonza",
                    "Tumurere",
                    "Ururembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Masoro",
                  "villages": [
                    "Byimana",
                    "Kabeza",
                    "Masoro",
                    "Matwari",
                    "Mubuga",
                    "Munini"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mukuyu",
                  "villages": [
                    "Akamusare",
                    "Akimana",
                    "Gasharu",
                    "Jurwe",
                    "Karambo",
                    "Kigabiro",
                    "Ruseno"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rudashya",
                  "villages": [
                    "Kacyinyaga",
                    "Kamahoro",
                    "Munini",
                    "Nyakagezi",
                    "Ruhangare",
                    "Ruhogo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nduba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Butare",
                  "villages": [
                    "Kanani",
                    "Kidahe",
                    "Kigabiro",
                    "Nyamurambi",
                    "Nyarubuye",
                    "Nyura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasanze",
                  "villages": [
                    "Gatagara",
                    "Kagarama",
                    "Nyabitare",
                    "Nyakabungo",
                    "Nyarubande",
                    "Uruhetse"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasura",
                  "villages": [
                    "Agacyamo",
                    "Gashinya",
                    "Gikombe",
                    "Kazi",
                    "Kigufi",
                    "Nyirakibehe",
                    "Uruhahiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatunga",
                  "villages": [
                    "Agasharu",
                    "Amataba",
                    "Burungero",
                    "Karama",
                    "Nyange",
                    "Rebero",
                    "Uruyange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muremure",
                  "villages": [
                    "Gatobotobo",
                    "Kibungo",
                    "Musezero",
                    "Nyaburoro",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sha",
                  "villages": [
                    "Bikumba",
                    "Gakizi",
                    "Gatare",
                    "Kamuyange",
                    "Kigarama",
                    "Ngara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shango",
                  "villages": [
                    "Akazi",
                    "Kaduha",
                    "Kamuhoza",
                    "Mirambi",
                    "Munini",
                    "Ndanyoye",
                    "Nyamigina",
                    "Rugarama"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Remera",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Nyabisindu",
                  "villages": [
                    "Amarembo I",
                    "Amarembo Il",
                    "Gihogere",
                    "Kagara",
                    "Kinunga",
                    "Nyabisindu",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarutarama",
                  "villages": [
                    "Gishushu",
                    "Juru",
                    "Kamahwa",
                    "Kangondo I",
                    "Kangondo II",
                    "Kibiraro I",
                    "Kibiraro II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukiri I",
                  "villages": [
                    "Agashyitsi",
                    "Amajyambere",
                    "Izuba",
                    "Gisimenti",
                    "Ubumwe",
                    "Ukwezi",
                    "Urumuri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukiri II",
                  "villages": [
                    "Amahoro",
                    "Rebero",
                    "Ruturusu I",
                    "Ruturusu II",
                    "Ubumwe"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rusororo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bisenga",
                  "villages": ["Bisenga", "Gakenyeri", "Gasiza", "Kidogo"]
                },
                {
                  "type": "CELLS",
                  "name": "Gasagara",
                  "villages": [
                    "Agatare",
                    "Gasagara",
                    "Kamasasa",
                    "Rugagi",
                    "Ryabazana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuga I",
                  "villages": [
                    "Abatangampundu",
                    "Amahoro",
                    "Isangano",
                    "Kabeza",
                    "Kalisimbi",
                    "Masango"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuga II",
                  "villages": [
                    "Bwiza",
                    "Cyanamo",
                    "Gatare",
                    "Kamashashi",
                    "Mataba",
                    "Nyagakombe",
                    "Ruhangare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kinyana",
                  "villages": ["Busenyi", "Kigabiro", "Kinyana", "Nyagisozi"]
                },
                {
                  "type": "CELLS",
                  "name": "Mbandazi",
                  "villages": [
                    "Cyeru",
                    "Karambo",
                    "Kataruha",
                    "Mugeyo",
                    "Rugarama",
                    "Samuduha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagahinga",
                  "villages": [
                    "Gisharara",
                    "Kabutare",
                    "Kanyinya",
                    "Kigarama",
                    "Nyarucundura",
                    "Runyonza",
                    "Urumuri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhanga",
                  "villages": [
                    "Kinyaga",
                    "Mirama",
                    "Nyagacyamo",
                    "Rugende",
                    "Ruhanga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rutunga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasabo",
                  "villages": ["Gasharu", "Mulindi", "Vugavuge"]
                },
                {
                  "type": "CELLS",
                  "name": "Indatemwa",
                  "villages": [
                    "Kabarera",
                    "Kamusengo",
                    "Karekare",
                    "Karuranga",
                    "Nyakabande"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabaliza",
                  "villages": ["Kabaliza", "Nyamise", "Rwanyanza"]
                },
                {
                  "type": "CELLS",
                  "name": "Kacyatwa",
                  "villages": [
                    "Cyili",
                    "Kacyatwa",
                    "Kandamira",
                    "Kantabana",
                    "Munini"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibenga",
                  "villages": ["Abanyangeyo", "Kibenga", "Nyamvumvu"]
                },
                {
                  "type": "CELLS",
                  "name": "Kigabiro",
                  "villages": [
                    "Kamusare",
                    "Karwiru",
                    "Kigabiro",
                    "Rukerereza",
                    "Rwintare"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Kicukiro",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Gahanga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gahanga",
                  "villages": [
                    "Gahanga",
                    "Gatare",
                    "Gatovu",
                    "Rinini",
                    "Rwinanka",
                    "Ubumwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagasa",
                  "villages": [
                    "Kabeza",
                    "Kabidandi",
                    "Kiyanja",
                    "Nyacyonga",
                    "Nyagafunzo",
                    "Nyakuguma",
                    "Rugando II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karembure",
                  "villages": [
                    "Amahoro",
                    "Bigo",
                    "Kabeza",
                    "Kamuyinga",
                    "Karembure",
                    "Kimena",
                    "Mubuga",
                    "Rwamaya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murinja",
                  "villages": [
                    "Kampuro",
                    "Kigasa",
                    "Mashyiga",
                    "Nyabigugu",
                    "Nyamuharaza",
                    "Rukore",
                    "Runyoni",
                    "Sabununga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nunga",
                  "villages": [
                    "Kigarama",
                    "Kinyana",
                    "Mugendo",
                    "Nunga I",
                    "Nunga II",
                    "Rugasa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwabutenge",
                  "villages": [
                    "Gahosha",
                    "Gashubi",
                    "Kaboshya",
                    "Karambo",
                    "Rebero",
                    "Rugando I"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gatenga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatenga",
                  "villages": [
                    "Amahoro",
                    "Gakoki",
                    "Gatenga",
                    "Ihuriro",
                    "Isangano",
                    "Rugari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambo",
                  "villages": [
                    "Gwiza",
                    "Ihuriro",
                    "Jyambere",
                    "Kamabuye",
                    "Mahoro",
                    "Ramiro",
                    "Rebero",
                    "Rugwiro",
                    "Ruhuka",
                    "Sangwa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyanza",
                  "villages": [
                    "Bwiza",
                    "Cyeza",
                    "Gasabo",
                    "Ihuriro",
                    "Isonga",
                    "Juru",
                    "Marembo",
                    "Murambi",
                    "Nyanza",
                    "Rebero",
                    "Rusororo",
                    "Sabaganga",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarurama",
                  "villages": ["Bigo", "Bisambu", "Kabeza", "Nyabikenke"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gikondo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kagunga",
                  "villages": [
                    "Gatare",
                    "Kabuye I",
                    "Kabuye II",
                    "Kagunga I",
                    "Kagunga II",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanserege",
                  "villages": [
                    "Kanserege I",
                    "Kanserege II",
                    "Kanserege III",
                    "Marembo I",
                    "Marembo II",
                    "Marembo III"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kinunga",
                  "villages": [
                    "Kigugu I",
                    "Kigugu II",
                    "Kigugu III",
                    "Kinunga",
                    "Ruganwa I",
                    "Ruganwa II",
                    "Ruganwa III"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kagarama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kanserege",
                  "villages": [
                    "Bwiza",
                    "Byimana",
                    "Ituze",
                    "Kanserege",
                    "Kinunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muyange",
                  "villages": ["Kamuna", "Mugeyo", "Muyange", "Rugunga"]
                },
                {
                  "type": "CELLS",
                  "name": "Rukatsa",
                  "villages": [
                    "Inshuti",
                    "Mpingayanyanza",
                    "Nyacyonga",
                    "Nyanza",
                    "Rukatsa",
                    "Taba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kanombe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Busanza",
                  "villages": [
                    "Amahoro",
                    "Antene",
                    "Bamporeze I",
                    "Bamporeze II",
                    "Gashyushya",
                    "Gishikiri",
                    "Hope",
                    "Kariyeri",
                    "Nyarugugu",
                    "Radari",
                    "Rukore"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabeza",
                  "villages": [
                    "Akagera",
                    "Bwiza",
                    "Gasabo",
                    "Giporoso I",
                    "Giporoso II",
                    "Juru",
                    "Kabeza",
                    "Karisimbi",
                    "Muhabura",
                    "Mulindi",
                    "Nyarurembo",
                    "Nyenyeri",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karama",
                  "villages": [
                    "Bitare",
                    "Byimana",
                    "Cyurusagara",
                    "Gakorokombe",
                    "Gikundiro",
                    "Gitarama",
                    "Karama",
                    "Nyabyunyu",
                    "Nyarutovu",
                    "Urukundo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubirizi",
                  "villages": [
                    "Beninka",
                    "Bukunzi",
                    "Cyeru",
                    "Intwari",
                    "Itunda",
                    "Kavumu",
                    "Susuruka",
                    "Ubumwe",
                    "Umunara",
                    "Uwabarezi",
                    "Zirakamwa"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kicukiro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasharu",
                  "villages": ["Amajyambere", "Gasharu", "Sakirwa", "Umunyinya"]
                },
                {
                  "type": "CELLS",
                  "name": "Kagina",
                  "villages": [
                    "Gashiha",
                    "Iriba",
                    "Multimedia",
                    "Umunyinya",
                    "Umuremure",
                    "Urugero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kicukiro",
                  "villages": [
                    "Gasave",
                    "Isoko",
                    "Karisimbi",
                    "Kicukiro",
                    "Triangle",
                    "Ubumwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngoma",
                  "villages": [
                    "Ahitegeye",
                    "Intaho",
                    "Iriba",
                    "Isangano",
                    "Urugero"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kigarama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bwerankori",
                  "villages": [
                    "Gakokobe",
                    "Gatare",
                    "Imena",
                    "Ituze",
                    "Kabutare",
                    "Kimisange",
                    "Nyenyeri",
                    "Ubumenyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karugira",
                  "villages": [
                    "Ibuga",
                    "Ihuriro",
                    "Murambi",
                    "Rutoki",
                    "Taba",
                    "Terimbere",
                    "Ubutare",
                    "Umurimo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigarama",
                  "villages": [
                    "Akimana",
                    "Amahoro",
                    "Byimana",
                    "Indatwa",
                    "Ingenzi",
                    "Kabeza",
                    "Karurayi",
                    "Mataba",
                    "Umucyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarurama",
                  "villages": [
                    "Kamabuye",
                    "Karuyenzi",
                    "Kivu",
                    "Rebero",
                    "Twishorezo",
                    "Zuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwampara",
                  "villages": [
                    "Amajyambere",
                    "Bwiza",
                    "Nyarurembo",
                    "Ubumwe",
                    "Umutekano",
                    "Urumuri",
                    "Uwateke"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Masaka",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Ayabaraya",
                  "villages": [
                    "Kababyeyi",
                    "Ayabaraya",
                    "Nyamico",
                    "Nyamyijima",
                    "Nyirakavomo",
                    "Rususa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyimo",
                  "villages": [
                    "Biryogo",
                    "Bwiza",
                    "Cyimo",
                    "Kabeza",
                    "Kiyovu",
                    "Masaka",
                    "Murambi",
                    "Nyakagunga",
                    "Urugwiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gako",
                  "villages": [
                    "Bamporeze",
                    "Butangampundu",
                    "Butare",
                    "Cyugamo",
                    "Gicaca",
                    "Gihuke",
                    "Kabeza",
                    "Kibande",
                    "Rebero",
                    "Rugende",
                    "Ruyaga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitaraga",
                  "villages": [
                    "Gitaraga",
                    "Kabeza",
                    "Kajevuba",
                    "Nyakarambi",
                    "Nyange",
                    "Ruhanga",
                    "Rwintare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbabe",
                  "villages": [
                    "Kabeza",
                    "Kamashashi",
                    "Mbabe",
                    "Murambi",
                    "Ngarama",
                    "Sangano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusheshe",
                  "villages": [
                    "Cyankongi",
                    "Cyeru",
                    "Gatare",
                    "Kagese",
                    "Kanyetabi",
                    "Mubano",
                    "Ruhosha"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Niboye",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatare",
                  "villages": [
                    "Byimana",
                    "Gatare",
                    "Imena",
                    "Kamahoro",
                    "Kigarama",
                    "Rugunga",
                    "Rurembo",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Niboye",
                  "villages": [
                    "Buhoro",
                    "Gaseke",
                    "Gateke",
                    "Gorora",
                    "Kigabiro",
                    "Kinunga",
                    "Kiruhura",
                    "Munini",
                    "Murehe",
                    "Mwijabo",
                    "Mwijuto",
                    "Nyarubande",
                    "Rwezamenyo",
                    "Sovu",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakabanda",
                  "villages": [
                    "Amahoro",
                    "Amarebe",
                    "Amarembo",
                    "Bigabiro",
                    "Bukinanyana",
                    "Bumanzi",
                    "Bwiza",
                    "Gatsibo",
                    "Gikundiro",
                    "Indakemwa",
                    "Indamutsa",
                    "Indatwa",
                    "Inyarurembo",
                    "Isangano",
                    "Karama",
                    "Kinyana",
                    "Rugwiro",
                    "Umurava"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyarugunga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kamashashi",
                  "villages": [
                    "Akindege",
                    "Indatwa",
                    "Intwari",
                    "Kabagendwa",
                    "Kibaya",
                    "Mukoni",
                    "Mulindi",
                    "Umucyo",
                    "Uruhongore"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nonko",
                  "villages": [
                    "Gasaraba",
                    "Gihanga",
                    "Gitara",
                    "Kavumu",
                    "Mahoro",
                    "Nyarutovu",
                    "Rugali",
                    "Runyonza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwimbogo",
                  "villages": [
                    "Gabiro",
                    "Kabaya",
                    "Kanogo",
                    "Marembo",
                    "Umushumba Mwiza",
                    "Nyandungu",
                    "Ruragendwa",
                    "Rwinyana",
                    "Rwinyange",
                    "Rwiza",
                    "Urwibutso"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Nyarugenge",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Gitega",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Akabahizi",
                  "villages": [
                    "Gihanga",
                    "Iterambere",
                    "Izuba",
                    "Nyaburanga",
                    "Nyenyeri",
                    "Ubukorikori",
                    "Ubumwe",
                    "Ubwiyunge",
                    "Umucyo",
                    "Umurabyo",
                    "Umuseke",
                    "Vugizo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Akabeza",
                  "villages": [
                    "Akinyambo",
                    "Amayaga",
                    "Gitwa",
                    "Ituze",
                    "Mpazi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gacyamo",
                  "villages": [
                    "Amahoro",
                    "Impuhwe",
                    "Intsinzi",
                    "Kivumu",
                    "Ubumwe",
                    "Urukundo",
                    "Ururembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigarama",
                  "villages": [
                    "Ingenzi",
                    "Sangwa",
                    "Umubano",
                    "Umucyo",
                    "Umuhoza",
                    "Umurava"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kinyange",
                  "villages": [
                    "Akabugenewe",
                    "Ihuriro",
                    "Isangano",
                    "Isano",
                    "Karitasi",
                    "Ubumanzi",
                    "Uburezi",
                    "Ubwiza",
                    "Umucyo",
                    "Umwembe",
                    "Urugano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kora",
                  "villages": [
                    "Isangano",
                    "Kanunga",
                    "Kinyambo",
                    "Kivumu",
                    "Kora",
                    "Mpazi",
                    "Rugano",
                    "Rugari",
                    "Ubumwe"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kanyinya",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Nyamweru",
                  "villages": [
                    "Bwimo",
                    "Gatare",
                    "Mubuga",
                    "Nyakirambi",
                    "Nyamweru",
                    "Ruhengeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nzove",
                  "villages": [
                    "Bibungo",
                    "Bwiza",
                    "Gateko",
                    "Kagasa",
                    "Nyabihu",
                    "Rutagara I",
                    "Rutagara II",
                    "Ruyenzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Taba",
                  "villages": [
                    "Kagaramira",
                    "Ngendo",
                    "Nyarurama",
                    "Nyarusange",
                    "Rwakivumu",
                    "Taba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kigali",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kigali",
                  "villages": [
                    "Akirwanda",
                    "Gisenga",
                    "Kadobogo",
                    "Kagarama",
                    "Kibisogi",
                    "Muganza",
                    "Murama",
                    "Rubuye",
                    "Ruhango",
                    "Ryasharangabo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwendo",
                  "villages": [
                    "Agakomeye",
                    "Akagugu",
                    "Amahoro",
                    "Amajyambere",
                    "Birambo",
                    "Isangano",
                    "Kanyabami",
                    "Karambo",
                    "Mwendo",
                    "Ruhuha",
                    "Ubuzima",
                    "Umutekano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabugogo",
                  "villages": [
                    "Gakoni",
                    "Gatare",
                    "Giticyinyoni",
                    "Kadobogo",
                    "Kamenge",
                    "Karama",
                    "Kiruhura",
                    "Nyabikoni",
                    "Nyabugogo",
                    "Ruhondo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruriba",
                  "villages": [
                    "Misibya",
                    "Nyabitare",
                    "Ruhango",
                    "Ruharabuge",
                    "Ruriba",
                    "Ruzigimbogo",
                    "Ryamakomari",
                    "Tubungo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwesero",
                  "villages": [
                    "Akanyamirambo",
                    "Akinama",
                    "Makaga",
                    "Musimba",
                    "Ruhogo",
                    "Rwesero",
                    "Rweza",
                    "Vuganyana"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kimisagara",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kamuhoza",
                  "villages": [
                    "Buhoro",
                    "Busasamana",
                    "Isimbi",
                    "Ituze",
                    "Karama",
                    "Karwarugabo",
                    "Kigabiro",
                    "Mataba",
                    "Munini",
                    "Ntaraga",
                    "Nunga",
                    "Rurama",
                    "Rutunga",
                    "Tetero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Katabaro",
                  "villages": [
                    "Akamahoro",
                    "Akishinge",
                    "Akishuri",
                    "Amahumbezi",
                    "Inganzo",
                    "Kigarama",
                    "Mpazi",
                    "Mugina",
                    "Ubumwe",
                    "Ubusabane",
                    "Umubano",
                    "Umurinzi",
                    "Uruyange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kimisagara",
                  "villages": [
                    "Akabeza",
                    "Amahoro",
                    "Birama",
                    "Buhoro",
                    "Bwiza",
                    "Byimana",
                    "Gakaraza",
                    "Gaseke",
                    "Ihuriro",
                    "Inkurunziza",
                    "Karambi",
                    "Kigina",
                    "Kimisagara",
                    "Kove",
                    "Muganza",
                    "Nyabugogo",
                    "Nyagakoki",
                    "Nyakabingo",
                    "Nyamabuye",
                    "Sangwa",
                    "Sano"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mageregere",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kankuba",
                  "villages": [
                    "Kamatamu",
                    "Kankuba",
                    "Karukina",
                    "Musave",
                    "Nyarumanga",
                    "Rugendabari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kavumu",
                  "villages": [
                    "Ayabatanga",
                    "Kankurimba",
                    "Kavumu",
                    "Mubura",
                    "Murondo",
                    "Nyakabingo",
                    "Nyarubuye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mataba",
                  "villages": [
                    "Burema",
                    "Gahombo",
                    "Kabeza",
                    "Karambi",
                    "Kwisanga",
                    "Mageragere",
                    "Mataba",
                    "Rushubi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ntungamo",
                  "villages": [
                    "Akanakamageragere",
                    "Gatovu",
                    "Nyabitare",
                    "Nyarubande",
                    "Rubungo",
                    "Rwindonyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarufunzo",
                  "villages": [
                    "Akabungo",
                    "Akamashinge",
                    "Maya",
                    "Nyarufunzo",
                    "Nyarurama",
                    "Rubete"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarurenzi",
                  "villages": [
                    "Amahoro",
                    "Ayabaramba",
                    "Gikuyu",
                    "Iterambere",
                    "Nyabirondo",
                    "Nyarurenzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Runzenze",
                  "villages": [
                    "Gisunzu",
                    "Mpanga",
                    "Nkomero",
                    "Runzenze",
                    "Uwurugenge"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muhima",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Amahoro",
                  "villages": [
                    "Amahoro",
                    "Amizero",
                    "Inyarurembo",
                    "Kabirizi",
                    "Ubuzima",
                    "Uruhimbi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabasengerezi",
                  "villages": ["Icyeza", "Ikana", "Intwari", "Kabasengerezi"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabeza",
                  "villages": [
                    "Hirwa",
                    "Ikaze",
                    "Imanzi",
                    "Ingenzi",
                    "Ituze",
                    "Sangwa",
                    "Umwezi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabugogo",
                  "villages": [
                    "Abeza",
                    "Icyerekezo",
                    "Indatwa",
                    "Rwezangoro",
                    "Ubucuruzi",
                    "Umutekano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugenge",
                  "villages": ["Imihigo", "Impala", "Rugenge", "Ubumanzi"]
                },
                {
                  "type": "CELLS",
                  "name": "Tetero",
                  "villages": [
                    "Indamutsa",
                    "Ingoro",
                    "Inkingi",
                    "Intiganda",
                    "Iwacu",
                    "Tetero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ubumwe",
                  "villages": [
                    "Bwahirimba",
                    "Duterimbere",
                    "Isangano",
                    "Nyanza",
                    "Urugwiro",
                    "Urwego"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyakabanda",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Munanira I",
                  "villages": [
                    "Kabusunzu",
                    "Munanira",
                    "Ntaraga",
                    "Nyagasozi",
                    "Rurembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munanira II",
                  "villages": [
                    "Gasiza",
                    "Kamwiza",
                    "Kanyange",
                    "Karudandi",
                    "Kigabiro",
                    "Kokobe",
                    "Mucyuranyana",
                    "Nkundumurimbo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakabanda I",
                  "villages": [
                    "Akinkware",
                    "Gapfupfu",
                    "Gasiza",
                    "Kariyeri",
                    "Kokobe",
                    "Munini",
                    "Nyakabanda",
                    "Rwagitanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakabanda II",
                  "villages": [
                    "Ibuhoro",
                    "Kabeza",
                    "Kanyiranganji",
                    "Karujongi",
                    "Kigarama",
                    "Kirwa"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyamirambo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyivugiza",
                  "villages": [
                    "Amizero",
                    "Gabiro",
                    "Imanzi",
                    "Ingenzi",
                    "Intwari",
                    "Karisimbi",
                    "Mahoro",
                    "Mpano",
                    "Muhabura",
                    "Muhoza",
                    "Munini",
                    "Rugero",
                    "Shema"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasharu",
                  "villages": ["Kagunga", "Karukoro", "Rwintare"]
                },
                {
                  "type": "CELLS",
                  "name": "Mumena",
                  "villages": [
                    "Akanyana",
                    "Akanyirazaninka",
                    "Akarekare",
                    "Akatabaro",
                    "Irembo",
                    "Itaba",
                    "Kiberinka",
                    "Mumena",
                    "Rwampara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugarama",
                  "villages": [
                    "Gatare",
                    "Kiberinka",
                    "Munanira",
                    "Riba",
                    "Rubona",
                    "Rugarama",
                    "Runyinya",
                    "Rusisiro",
                    "Tetero"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyarugenge",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Agatare",
                  "villages": [
                    "Agatare",
                    "Amajyambere",
                    "Inyambo",
                    "Meraneza",
                    "Uburezi",
                    "Umucyo",
                    "Umurava"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Biryogo",
                  "villages": [
                    "Biryogo",
                    "Gabiro",
                    "Isoko",
                    "Nyiranuma",
                    "Umurimo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiyovu",
                  "villages": [
                    "Amizero",
                    "Cercle Sportif",
                    "Ganza",
                    "Imena",
                    "Indangamirwa",
                    "Ingenzi",
                    "Inyarurembo",
                    "Ishema",
                    "Isibo",
                    "Muhabura",
                    "Rugunga",
                    "Sugira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwampara",
                  "villages": [
                    "Amahoro",
                    "Gacaca",
                    "Intwari",
                    "Rwampara",
                    "Umucyo",
                    "Umuganda"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rwezamenyo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kabuguru I",
                  "villages": ["Muhoza", "Muhuza", "Mumararungu", "Murambi"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuguru II",
                  "villages": ["Buhoro", "Gasabo", "Mutara", "Ubusabane"]
                },
                {
                  "type": "CELLS",
                  "name": "Rwezamenyo I",
                  "villages": [
                    "Abatarushwa",
                    "Indatwa",
                    "Inkerakubanza",
                    "Intwari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwezamenyo II",
                  "villages": ["Amahoro", "Umucyo", "Urumuri"]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "type": "PROVINCE",
      "name": "North",
      "districts": [
        {
          "type": "DISTRICT",
          "name": "Burera",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Bungwe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bungwe",
                  "villages": [
                    "Bungwe",
                    "Gakeri",
                    "Gatenga",
                    "Kinihira",
                    "Nyabyondo",
                    "Rweru",
                    "Zaneza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bushenya",
                  "villages": [
                    "Buhinga",
                    "Bushenya",
                    "Gifumba",
                    "Mbuga",
                    "Ryamayaya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mudugari",
                  "villages": [
                    "Buzaniro",
                    "Kivumo",
                    "Mubuga",
                    "Rubayo",
                    "Sangabuzi",
                    "Vunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Tumba",
                  "villages": [
                    "Byorera",
                    "Karwema",
                    "Mubuga",
                    "Murambo",
                    "Mutungo",
                    "Nama",
                    "Nyarukore",
                    "Tumba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Butaro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatsibo",
                  "villages": [
                    "Gafumba",
                    "Gahuye",
                    "Gasebeya",
                    "Gatare",
                    "Gatovu",
                    "Kadehero",
                    "Kagano",
                    "Kaniga",
                    "Kanyoni",
                    "Kindoyi",
                    "Murambi",
                    "Rubonobono",
                    "Rwabutama",
                    "Rweru"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": [
                    "Biyove",
                    "Bugeme",
                    "Gacyamo",
                    "Kirwa",
                    "Mulindi",
                    "Murambi",
                    "Musenyi",
                    "Nyanamo",
                    "Rupangu",
                    "Ryakagundu",
                    "Ryanturege"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhotora",
                  "villages": [
                    "Bukaragata",
                    "Cyahera",
                    "Gahunge",
                    "Kabere",
                    "Karambi",
                    "Kibande",
                    "Kindege",
                    "Murambo",
                    "Murwa",
                    "Rugandu",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamicucu",
                  "villages": [
                    "Burambira",
                    "Gacereri",
                    "Gahira",
                    "Gari",
                    "Gasiza",
                    "Gitovu",
                    "Karingorera",
                    "Kibingo",
                    "Kiringa",
                    "Murwa",
                    "Musama",
                    "Nkururo",
                    "Nyamiyaga",
                    "Rubaya",
                    "Rugeshi",
                    "Rwemikore"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusumo",
                  "villages": [
                    "Budogoro",
                    "Butaro",
                    "Buyanga",
                    "Cyasenge",
                    "Gitanda",
                    "Kabahura",
                    "Kabaya",
                    "Kabingo",
                    "Kamonyi",
                    "Kanyesogo",
                    "Mugari",
                    "Mugera",
                    "Mukeri",
                    "Musongati",
                    "Nyamiyaga",
                    "Runaba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Cyanika",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasiza",
                  "villages": [
                    "Bahimba",
                    "Gahirikiro",
                    "Gashunguru",
                    "Kabona",
                    "Karisimbi",
                    "Kaziguro",
                    "Nyamiyaga",
                    "Rwankongi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisovu",
                  "villages": [
                    "Gisovu",
                    "Hanika",
                    "Kamegeri",
                    "Mataba",
                    "Ruhimbi",
                    "Rusenyi",
                    "Rutango",
                    "Samiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabyiniro",
                  "villages": [
                    "Butete",
                    "Kabadari",
                    "Mbonabose",
                    "Mugarama",
                    "Mugeshi",
                    "Nkiriza",
                    "Nyagisenyi",
                    "Zindiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagitega",
                  "villages": [
                    "Gasebeya",
                    "Kabaya",
                    "Kagerero",
                    "Karambo",
                    "Kidaho",
                    "Munini",
                    "Ntarama",
                    "Sirwa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamanyana",
                  "villages": [
                    "Gasiza",
                    "Gasovu",
                    "Kabira",
                    "Kavunda",
                    "Kibaya",
                    "Majyambere",
                    "Nyarutosho",
                    "Runyenkanda",
                    "Ryabiteyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagahinga",
                  "villages": [
                    "Bisura",
                    "Gahama",
                    "Gahonga",
                    "Gakenke",
                    "Kabande",
                    "Kabyimana",
                    "Kanyabaranzi",
                    "Kebero",
                    "Mashango",
                    "Musave",
                    "Ruko"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Cyeru",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Butare",
                  "villages": [
                    "Butare",
                    "Gatare",
                    "Kamata",
                    "Kamonyi",
                    "Musama",
                    "Nyaruyove",
                    "Ryandahagaze"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ndongozi",
                  "villages": [
                    "Kabagenza",
                    "Ntazi",
                    "Nterura",
                    "Nyagisozi",
                    "Nyamusanze",
                    "Rujanja",
                    "Ryaruhirima"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruyange",
                  "villages": [
                    "Bitagara",
                    "Burabwa",
                    "Gatagara-jite",
                    "Kabaya",
                    "Ngambi",
                    "Rihiro",
                    "Rugarama",
                    "Runyenyeri",
                    "Susa"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gahunga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buramba",
                  "villages": [
                    "Buramba",
                    "Gafatangwe",
                    "Gasenyi",
                    "Kagoma",
                    "Karuheshyi",
                    "Murambi",
                    "Musanzu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisizi",
                  "villages": [
                    "Gisizi",
                    "Kabagabo",
                    "Kanaba",
                    "Kigote",
                    "Nyagasozi",
                    "Ruri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kidakama",
                  "villages": [
                    "Bahenga",
                    "Kabarima",
                    "Kabindi",
                    "Kajevuba",
                    "Kangoma",
                    "Kanyendara",
                    "Kidakama",
                    "Mubuga",
                    "Nangimbibi",
                    "Rusenyi",
                    "Songa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyangwe",
                  "villages": [
                    "Bihanga",
                    "Gasagara",
                    "Gikoro",
                    "Kamatanda",
                    "Mubibi",
                    "Ntenyo",
                    "Nyangwe",
                    "Remera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwasa",
                  "villages": [
                    "Gitagata",
                    "Kabanga",
                    "Kangoboka",
                    "Kanyiramusengo",
                    "Mirigari",
                    "Mutara",
                    "Nyangezi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gatebe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gabiro",
                  "villages": [
                    "Gatebe",
                    "Ginga",
                    "Kabuga",
                    "Kagano",
                    "Kajerijeri",
                    "Nyakabungo",
                    "Rugarama",
                    "Ryaruyumbu",
                    "Zihare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musenda",
                  "villages": [
                    "Bikumba",
                    "Cyankaranka",
                    "Kabayoboke",
                    "Kabuga",
                    "Muremure",
                    "Nyamahunge",
                    "Rushaki",
                    "Sabukima",
                    "Sunzu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwambogo",
                  "villages": [
                    "Cyili",
                    "Mubuga",
                    "Murambo",
                    "Ruhinga",
                    "Rutete",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwasa",
                  "villages": [
                    "Karambi",
                    "Kiyogera",
                    "Murambo",
                    "Nganzo",
                    "Rugarama",
                    "Rutovu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gitovu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Mariba",
                  "villages": [
                    "Buhembe",
                    "Cyogo",
                    "Kiboga",
                    "Mariba",
                    "Musekera",
                    "Mwungura",
                    "Rusuzuma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musasa",
                  "villages": [
                    "Butanga",
                    "Gashiru",
                    "Gicura",
                    "Kamusaba",
                    "Kibumbiro",
                    "Murore",
                    "Mutara",
                    "Ruhombo",
                    "Shyamba",
                    "Sina"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Runoga",
                  "villages": [
                    "Gitwe",
                    "Kiraro",
                    "Mubuga",
                    "Musekera",
                    "Mutungu",
                    "Siganiro"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kagogo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kabaya",
                  "villages": [
                    "Bihanga",
                    "Butare",
                    "Kanaba",
                    "Murambi",
                    "Rukenke"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kayenzi",
                  "villages": [
                    "Gatare",
                    "Kaguriro",
                    "Kiyira",
                    "Mubaya",
                    "Ngobori",
                    "Rukoro",
                    "Rusisiro",
                    "Rwitongo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiringa",
                  "villages": [
                    "Gisanze",
                    "Karambi",
                    "Kariba",
                    "Karombero",
                    "Kigote",
                    "Kirigari",
                    "Musangabo",
                    "Nyamuha",
                    "Rusenyi",
                    "Rwabageni",
                    "Ryangarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamabuye",
                  "villages": [
                    "Gitare",
                    "Kabana",
                    "Kabashotsi",
                    "Kikubo",
                    "Mfashe",
                    "Musarara",
                    "Nyamabuye",
                    "Nyarubuye",
                    "Nyarugina"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kinoni",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gafuka",
                  "villages": [
                    "Basumba",
                    "Bugeyo",
                    "Buharo",
                    "Kabeza",
                    "Kanoni",
                    "Ntwana",
                    "Nyagafunzo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkenke",
                  "villages": [
                    "Birwa",
                    "Kigina",
                    "Kigugu",
                    "Nyagatoki",
                    "Sunzu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkumba",
                  "villages": [
                    "Cyanya",
                    "Cyivugiza",
                    "Kabaguma",
                    "Karambo",
                    "Mbaya",
                    "Mubuga",
                    "Mutabo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ntaruka",
                  "villages": [
                    "Cyamabuye",
                    "Gikoro",
                    "Kabaya",
                    "Karuganda",
                    "Nyabagenzi",
                    "Nyarubuye",
                    "Nyarurembo",
                    "Ryamakoro",
                    "Shenyi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kinyababa",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bugamba",
                  "villages": [
                    "Cyogo",
                    "Gacaca",
                    "Gako",
                    "Gatare",
                    "Kabingo",
                    "Kirwa",
                    "Matyazo",
                    "Ndabizi",
                    "Rukore"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kaganda",
                  "villages": [
                    "Gisirwe",
                    "Kiraro",
                    "Mariko",
                    "Murambo",
                    "Ruhinga",
                    "Rusebeya",
                    "Rwahondo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musasa",
                  "villages": [
                    "Gitoma",
                    "Kabarore",
                    "Kanyaminyinya",
                    "Murambo",
                    "Rukaya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutovu",
                  "villages": [
                    "Gisiriri",
                    "Gitenge",
                    "Karambo",
                    "Kavumu",
                    "Musaga",
                    "Nyabizi I",
                    "Nyabizi II",
                    "Nyabizi III",
                    "Rubayu",
                    "Ryatamba",
                    "Shaga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kivuye",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bukwashuri",
                  "villages": [
                    "Buhita",
                    "Gitovu",
                    "Murambo",
                    "Nyakira",
                    "Nyamisare",
                    "Nyarutovu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gashanje",
                  "villages": [
                    "Bitukura",
                    "Burango",
                    "Gafumba",
                    "Gashiru",
                    "Karambo",
                    "Nyakabungo",
                    "Rugarambiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murwa",
                  "villages": [
                    "Gasiza",
                    "Gatare",
                    "Kabaya",
                    "Muhambo",
                    "Rubara",
                    "Rucyamo",
                    "Rusasa",
                    "Vumage"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyirataba",
                  "villages": [
                    "Buganza",
                    "Bukumbi",
                    "Kabasha",
                    "Kanyenzugi",
                    "Kivumo",
                    "Mushunga",
                    "Shanja"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nemba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kivumu",
                  "villages": [
                    "Gashushura",
                    "Kigeyo",
                    "Mugano",
                    "Nyamusanze",
                    "Songorero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamugari",
                  "villages": [
                    "Cyabami",
                    "Kagihanga",
                    "Karyango",
                    "Muhondo",
                    "Nyagahondo",
                    "Nyiraruhuha",
                    "Ryaruhirima",
                    "Shorezo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubona",
                  "villages": [
                    "Bugarigari",
                    "Bukenyeye",
                    "Butunda",
                    "Cyabarenge",
                    "Kadehero",
                    "Kanyaru",
                    "Murandamo",
                    "Ngongwe",
                    "Nyantweri",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rushara",
                  "villages": [
                    "Bishingwe",
                    "Bugondo",
                    "Cyave",
                    "Kagesera",
                    "Mugomero",
                    "Nyabitare"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rugarama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyahi",
                  "villages": [
                    "Busura",
                    "Gakore",
                    "Hanika",
                    "Karutwe",
                    "Nguri",
                    "Nyabiho",
                    "Rubeja",
                    "Ruganda",
                    "Tatiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gafumba",
                  "villages": [
                    "Bambiro",
                    "Basumba",
                    "Gacyogo",
                    "Gahunga",
                    "Kabaya",
                    "Kanyangezi",
                    "Muturirwa",
                    "Nyarwondo",
                    "Rugarama",
                    "Rutamba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karangara",
                  "villages": [
                    "Gahama",
                    "Gasiza",
                    "Kabaya",
                    "Kanyamugezi",
                    "Maya",
                    "Muhabura",
                    "Rugwiro",
                    "Rukiko",
                    "Sasa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rurembo",
                  "villages": [
                    "Birwa",
                    "Gashore",
                    "Mpinga",
                    "Nyakiriba",
                    "Rwambeho",
                    "Rwinkuba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rugengabari",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kilibata",
                  "villages": [
                    "Bushima",
                    "Cyogo",
                    "Murungu",
                    "Musheke",
                    "Remera",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mucaca",
                  "villages": [
                    "Burago",
                    "Burande",
                    "Gahinga",
                    "Kamonyi",
                    "Karubamba",
                    "Mugina",
                    "Nkoto",
                    "Nyabikungu",
                    "Rihiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyanamo",
                  "villages": [
                    "Bwenjeli",
                    "Kabira",
                    "Kabukoko",
                    "Kabuyenge",
                    "Kamonyi",
                    "Kiziba",
                    "Murambo",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukandabyuma",
                  "villages": [
                    "Gatenga",
                    "Kinyefurwe",
                    "Mubuga",
                    "Murambo",
                    "Ngoma",
                    "Nyansyo",
                    "Remya",
                    "Rugandu",
                    "Seta"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ruhunde",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gaseke",
                  "villages": [
                    "Gahe",
                    "Gatare",
                    "Kanyoni",
                    "Kintobo",
                    "Mukaka",
                    "Murambo",
                    "Rugaragara",
                    "Rukiniro",
                    "Rukwavu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatare",
                  "villages": [
                    "Gashinge",
                    "Gashishori",
                    "Gatete",
                    "Gitwe",
                    "Nganzo",
                    "Ruganda",
                    "Rukingu",
                    "Terimbere"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitovu",
                  "villages": [
                    "Cyasuri",
                    "Genda",
                    "Kaberano",
                    "Kamonyi",
                    "Muremure",
                    "Mweru",
                    "Ngoma",
                    "Tetero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusekera",
                  "villages": [
                    "Bugambanyoni",
                    "Gasura",
                    "Gatokezo",
                    "Matyazo",
                    "Rubyiniro",
                    "Rusenge",
                    "Tarasi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rusarabuye",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kabona",
                  "villages": [
                    "Bucyaba",
                    "Busutamo",
                    "Buzamuye",
                    "Gahinga",
                    "Gasongati",
                    "Gikore",
                    "Karambo",
                    "Muharuro",
                    "Munanira",
                    "Murambo",
                    "Musebeya",
                    "Ntagara",
                    "Rutuku"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ndago",
                  "villages": [
                    "Burehe",
                    "Gacaca",
                    "Gaseke",
                    "Gitovu",
                    "Kajerijeri",
                    "Karorero",
                    "Kirambo",
                    "Ndago",
                    "Nyarungu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhanga",
                  "villages": [
                    "Bisayu I",
                    "Bisayu II",
                    "Bumba",
                    "Kamukondo",
                    "Kanigo",
                    "Karuhanga",
                    "Kibuye",
                    "Ngundu",
                    "Ruhanga",
                    "Ruhurura I",
                    "Ruhurura II",
                    "Rutoro"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rwerere",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gacundura",
                  "villages": [
                    "Burindwa",
                    "Gacundura",
                    "Kanigo",
                    "Karegamazi",
                    "Moma",
                    "Rugaragara",
                    "Rugarambiro",
                    "Sarambwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gashoro",
                  "villages": [
                    "Bisaga",
                    "Cyapa",
                    "Gashoro",
                    "Kibuye",
                    "Ngonya",
                    "Rugezi",
                    "Rwerere"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruconsho",
                  "villages": [
                    "Buhore",
                    "Gakenke",
                    "Kamatengu",
                    "Kinkware",
                    "Mugera",
                    "Ngoma",
                    "Ruconsho"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugari",
                  "villages": [
                    "Gacyamu",
                    "Gatovu",
                    "Mucaca",
                    "Murambo",
                    "Mushubi",
                    "Tangata"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Gakenke",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Busengo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Birambo",
                  "villages": ["Birambo", "Gitwa", "Kirwa", "Nyarubande"]
                },
                {
                  "type": "CELLS",
                  "name": "Butereri",
                  "villages": [
                    "Buhuga",
                    "Butereri",
                    "Gasakuza",
                    "Kirwa",
                    "Rubaga",
                    "Rugendabari",
                    "Rwinkuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Byibuhiro",
                  "villages": [
                    "Gatoke",
                    "Kamina",
                    "Karambi",
                    "Nyagasozi",
                    "Ruboza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamina",
                  "villages": [
                    "Bunyangezi",
                    "Kajereri",
                    "Kamina",
                    "Mwendo",
                    "Nyarubuye",
                    "Rwankuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kirabo",
                  "villages": [
                    "Gasaso",
                    "Kirabo",
                    "Munyinya",
                    "Ngezi",
                    "Rusebeya",
                    "Wimfizi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwumba",
                  "villages": [
                    "Kabuga",
                    "Kamonyi",
                    "Karaba",
                    "Mugunga",
                    "Rutenga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhanga",
                  "villages": [
                    "Bukinga",
                    "Gashirwe",
                    "Kabaya",
                    "Kabugiri",
                    "Rurangara"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Coko",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kiruku",
                  "villages": [
                    "Buhuri",
                    "Bukamba",
                    "Bushagashi",
                    "Gatare",
                    "Mucumazo",
                    "Ntarabana",
                    "Nyamasuka",
                    "Rubuguma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbirima",
                  "villages": [
                    "Akanduga",
                    "Burengo",
                    "Bushyama",
                    "Matovu",
                    "Mbogo",
                    "Murambi",
                    "Rwahi",
                    "Shyunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyange",
                  "villages": [
                    "Buhara",
                    "Gaseke",
                    "Karambo",
                    "Karoli",
                    "Musasa",
                    "Ntobwe",
                    "Vumandi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyanza",
                  "villages": [
                    "Baramba",
                    "Gikamba",
                    "Gitaba",
                    "Kavumu",
                    "Tumba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Cyabingo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Muhaza",
                  "villages": [
                    "Buraza",
                    "Busoga",
                    "Karombero",
                    "Muhaza",
                    "Mushirarungu",
                    "Ntaraga",
                    "Rutaramiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhororo",
                  "villages": [
                    "Butaraga",
                    "Gatoki",
                    "Gatorero",
                    "Kabungwe",
                    "Karenge",
                    "Muhororo",
                    "Musebeya",
                    "Tongoburo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muramba",
                  "villages": [
                    "Bukuba",
                    "Gahama",
                    "Gatare",
                    "Musebeya",
                    "Rugaragara",
                    "Rwobe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mutanda",
                  "villages": [
                    "Cyabingo",
                    "Gishubi",
                    "Kambare",
                    "Kanyamukenke",
                    "Mucaca",
                    "Mutanda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukore",
                  "villages": [
                    "Kigote",
                    "Muramba",
                    "Murehe",
                    "Nyabisika",
                    "Nyamugali",
                    "Rugendabare",
                    "Rukore"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gakenke",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buheta",
                  "villages": [
                    "Buyagiro",
                    "Gatwa",
                    "Gihemba",
                    "Gikerera",
                    "Karambi",
                    "Karorero",
                    "Mucuro",
                    "Murambi",
                    "Ndora",
                    "Rusebeya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagoma",
                  "villages": [
                    "Bukanka",
                    "Cyandago",
                    "Gitenga",
                    "Kamatare",
                    "Murama",
                    "Murambi",
                    "Musave",
                    "Ntobwe",
                    "Rurambi",
                    "Rusuri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nganzo",
                  "villages": [
                    "Bwimba",
                    "Gahondo",
                    "Gashigwe",
                    "Gishyinguro",
                    "Kaniga",
                    "Kanyiramanyana",
                    "Karambi",
                    "Karehe",
                    "Karuganda",
                    "Mbizi",
                    "Mbogo",
                    "Muyira",
                    "Ryabazungu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusagara",
                  "villages": [
                    "Akarugamba",
                    "Busingiryi",
                    "Kabaya",
                    "Kageyo",
                    "Kakinungu",
                    "Kivumu",
                    "Mazinga",
                    "Murambi",
                    "Museke",
                    "Nyamabuye",
                    "Ruberano",
                    "Sitwe",
                    "Umujyi Wa Gakenke"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gashenyi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Nyacyina",
                  "villages": [
                    "Bwiyando",
                    "Gashinge",
                    "Kadehero",
                    "Masoro",
                    "Mukira",
                    "Nyamure",
                    "Rugarama",
                    "Rugendabari",
                    "Ruhore"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukura",
                  "villages": [
                    "Gahihi",
                    "Gikoro",
                    "Kara",
                    "Kirambo",
                    "Murandi",
                    "Nyamataha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutabo",
                  "villages": [
                    "Buhira",
                    "Buturuba",
                    "Gasanzwe",
                    "Kabwika",
                    "Kamurambo",
                    "Kanwa",
                    "Rubuga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutenderi",
                  "villages": [
                    "Gaseke",
                    "Gatwa",
                    "Gitaba",
                    "Kabere",
                    "Kabugomba",
                    "Kibara",
                    "Murambo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Taba",
                  "villages": [
                    "Busaro",
                    "Bushita",
                    "Gasharu",
                    "Gihanga",
                    "Kangomba",
                    "Kanteko",
                    "Murambi",
                    "Mwisha",
                    "Rutenderi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Janja",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gakindo",
                  "villages": [
                    "Bukerera",
                    "Bunyironko",
                    "Kabusoro",
                    "Kibonwa",
                    "Rubona",
                    "Rurumbya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gashyamba",
                  "villages": [
                    "Burega",
                    "Gatongo",
                    "Gitovu",
                    "Nyabikenke",
                    "Rwampali"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatwa",
                  "villages": [
                    "Buhanga",
                    "Gitega",
                    "Kinoko",
                    "Murambi",
                    "Mwanza",
                    "Nyabushishiri",
                    "Nyagisozi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karukungu",
                  "villages": [
                    "Buhimbi",
                    "Cyifuzo",
                    "Gitaba",
                    "Karama",
                    "Mugandu",
                    "Rugeshi",
                    "Rusasa",
                    "Rutake"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kamubuga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kamubuga",
                  "villages": [
                    "Gasebeya",
                    "Gashishi",
                    "Gitwe",
                    "Kabuye",
                    "Kanshenge",
                    "Kanyirantege",
                    "Marira",
                    "Nyarungu",
                    "Raro",
                    "Rugari",
                    "Ruhehe",
                    "Runeka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kidomo",
                  "villages": [
                    "Bucyaba",
                    "Bugogo",
                    "Kidomo",
                    "Kintobo",
                    "Njugi",
                    "Nyamusongati",
                    "Rugeshi",
                    "Rutagara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbatabata",
                  "villages": [
                    "Buhinda",
                    "Gatare",
                    "Horero",
                    "Kabyaza",
                    "Karingorera",
                    "Mbatabata",
                    "Mwasha",
                    "Ryabirere"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukore",
                  "villages": [
                    "Kabutwa",
                    "Karangara",
                    "Kinyababa",
                    "Rungu",
                    "Rusasa",
                    "Rusumo",
                    "Rwata",
                    "Taba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Karambo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kanyanza",
                  "villages": [
                    "Gatembe",
                    "Kabuhunu",
                    "Kabutare",
                    "Karambi",
                    "Karenge",
                    "Marembo",
                    "Nyiramisabike"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambo",
                  "villages": [
                    "Bataga",
                    "Bumbeja",
                    "Bushumba",
                    "Cyumba",
                    "Gasovu",
                    "Gatare",
                    "Gatorero",
                    "Gishingo",
                    "Kigarama",
                    "Mugamba",
                    "Nyiramuhimba",
                    "Rwamiko",
                    "Ryarurimbura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kirebe",
                  "villages": [
                    "Bukondo",
                    "Bukunga",
                    "Bukweto",
                    "Kabuye",
                    "Kavumu",
                    "Mubuga",
                    "Mwiyanike",
                    "Nyabigugu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kivuruga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyintare",
                  "villages": ["Bigogwe", "Buhuga", "Cyintare", "Nyarubuye"]
                },
                {
                  "type": "CELLS",
                  "name": "Gasiza",
                  "villages": [
                    "Bushoka",
                    "Kabuhoma",
                    "Kamwumba",
                    "Nturo",
                    "Nyarungu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugimbu",
                  "villages": [
                    "Gasave",
                    "Karuhunge",
                    "Mugali",
                    "Rurambo",
                    "Rutamba",
                    "Rwamabare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhinga",
                  "villages": [
                    "Buranga",
                    "Kamomo",
                    "Kavumu",
                    "Kintarure",
                    "Munyege",
                    "Rugeshi",
                    "Rwakirari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sereri",
                  "villages": [
                    "Buhayo",
                    "Kabara",
                    "Kivuruga",
                    "Masoro",
                    "Musekera",
                    "Ngarama"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mataba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buyange",
                  "villages": [
                    "Gabiro",
                    "Gashingiro",
                    "Kabeza",
                    "Kanamo",
                    "Karambi",
                    "Mubuga",
                    "Nyamiyaga",
                    "Rugendabari",
                    "Ryarugema"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gikombe",
                  "villages": [
                    "Bugari",
                    "Bweramana",
                    "Gashyushya",
                    "Gatovu",
                    "Muhororo",
                    "Munini",
                    "Muyaga",
                    "Nyangoma",
                    "Ruganda",
                    "Ruhanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyundo",
                  "villages": [
                    "Gihita",
                    "Gitaba",
                    "Kabuyora",
                    "Kagando",
                    "Karambi",
                    "Mataba",
                    "Mwanza",
                    "Nkurazo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Minazi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasiho",
                  "villages": [
                    "Gahombo",
                    "Gahunda",
                    "Gasangwa",
                    "Gihinga",
                    "Kabarima",
                    "Kigeyo",
                    "Mbogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munyana",
                  "villages": [
                    "Gihororo",
                    "Gitwa",
                    "Kanka",
                    "Kivuba",
                    "Nyabitare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": [
                    "Gisovu",
                    "Kabuga",
                    "Musave",
                    "Nyanza",
                    "Nyarubuye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Raba",
                  "villages": [
                    "Bukonde",
                    "Gaharo",
                    "Gitaragwe",
                    "Munihi",
                    "Mutara",
                    "Ndegamire",
                    "Sarabuye"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mugunga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gahinga",
                  "villages": [
                    "Cyinama",
                    "Giheta",
                    "Nyagahondo",
                    "Nyakagezi",
                    "Rwimpiri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munyana",
                  "villages": [
                    "Cyarubayi",
                    "Karambi",
                    "Muhororo",
                    "Nturo",
                    "Rwezamenyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mutego",
                  "villages": [
                    "Kamasanze",
                    "Kamunyana",
                    "Karambo",
                    "Nganzo",
                    "Rutaraga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkomane",
                  "villages": [
                    "Kabuga",
                    "Kanaba",
                    "Nemba",
                    "Nyagasozi",
                    "Rusebeya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutabo",
                  "villages": [
                    "Gacemeri",
                    "Gasovu",
                    "Gatonde",
                    "Kabuhoro",
                    "Muhororo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutenderi",
                  "villages": ["Kiraro", "Nyakazenga", "Nyundo", "Rubona"]
                },
                {
                  "type": "CELLS",
                  "name": "Rwamambe",
                  "villages": [
                    "Biraro",
                    "Bushoka",
                    "Gashubi",
                    "Kabiganda",
                    "Kanyinya"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muhondo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Busake",
                  "villages": ["Busake", "Gikikira", "Kibirizi", "Nyakabanda"]
                },
                {
                  "type": "CELLS",
                  "name": "Bwenda",
                  "villages": [
                    "Gahama",
                    "Gatare",
                    "Gitaba",
                    "Kimanama",
                    "Nketsi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasiza",
                  "villages": [
                    "Gahabwa",
                    "Gahinga",
                    "Gahondo",
                    "Gasiza",
                    "Kabeza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gihinga",
                  "villages": ["Base", "Gihinga", "Karehe", "Samuduha", "Taba"]
                },
                {
                  "type": "CELLS",
                  "name": "Huro",
                  "villages": ["Cura", "Gitwa", "Huro", "Kabuga", "Rubona"]
                },
                {
                  "type": "CELLS",
                  "name": "Musagara",
                  "villages": ["Akara", "Cyenda", "Giteme", "Karobagire"]
                },
                {
                  "type": "CELLS",
                  "name": "Musenyi",
                  "villages": ["Buhinya", "Gakuyu", "Kigali", "Musenyi"]
                },
                {
                  "type": "CELLS",
                  "name": "Ruganda",
                  "villages": [
                    "Gisozi",
                    "Kinyonzo",
                    "Mubuga",
                    "Ranzi",
                    "Ruganda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwinkuba",
                  "villages": ["Cyimbogo", "Kanyana", "Ruhorobero"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muyongwe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bumba",
                  "villages": [
                    "Bumba",
                    "Buzu",
                    "Gikoro",
                    "Gitovu",
                    "Gitwe",
                    "Mataba",
                    "Shiru"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisiza",
                  "villages": [
                    "Gitanda",
                    "Kabingo",
                    "Kiyebe",
                    "Muramba",
                    "Ruhoko",
                    "Sanzare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karyango",
                  "villages": ["Gikombe", "Kibingo", "Mahaha", "Mugera"]
                },
                {
                  "type": "CELLS",
                  "name": "Nganzo",
                  "villages": [
                    "Muhororo",
                    "Nganzo",
                    "Ngoma",
                    "Nyarubuye",
                    "Vugangoma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Va",
                  "villages": [
                    "Bukwera",
                    "Businde",
                    "Gikombe",
                    "Mutoyi",
                    "Ranzi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muzo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kabatezi",
                  "villages": [
                    "Curugusi",
                    "Gasave",
                    "Gitabi",
                    "Kabatezi",
                    "Kasheshe",
                    "Runyinya",
                    "Rusororo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiryamo",
                  "villages": [
                    "Akamagaju",
                    "Gahondo",
                    "Munyinya",
                    "Murambi",
                    "Rugarama",
                    "Rugege",
                    "Sezuku"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": [
                    "Butambwe",
                    "Kanini",
                    "Kavuza",
                    "Mubuga",
                    "Mwirika",
                    "Mwurire"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwiyando",
                  "villages": [
                    "Gitabi",
                    "Gitoke",
                    "Kagano",
                    "Muguguri",
                    "Nyagasozi",
                    "Rubayo",
                    "Ruhondo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwa",
                  "villages": [
                    "Bitaba",
                    "Cyinturo",
                    "Gacaca",
                    "Gihororo",
                    "Kabere",
                    "Mafubo",
                    "Nyagahondo",
                    "Nyarubande"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nemba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buranga",
                  "villages": [
                    "Buranga",
                    "Burego",
                    "Butare",
                    "Kanyansyo",
                    "Muganwa",
                    "Mukaka",
                    "Rukoji"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gahinga",
                  "villages": ["Bitare", "Bukurura", "Kabaya", "Kilimbi"]
                },
                {
                  "type": "CELLS",
                  "name": "Gisozi",
                  "villages": [
                    "Gisagara",
                    "Kabushara",
                    "Kamatete",
                    "Kanama",
                    "Kanunga",
                    "Kanzoka",
                    "Karukara",
                    "Kirehe",
                    "Mushubi",
                    "Nyamyumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mucaca",
                  "villages": [
                    "Cyahafi",
                    "Gatare",
                    "Kabingo",
                    "Kabuye",
                    "Kamuvunyi",
                    "Kiruhura",
                    "Kiryamo",
                    "Munyege",
                    "Musange",
                    "Ntakabavu",
                    "Nyamiyaga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ruli",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Busoro",
                  "villages": [
                    "Congoli",
                    "Cyoganyoni",
                    "Gitaba",
                    "Kabare",
                    "Kibirizi",
                    "Nkoto",
                    "Rugaragara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gikingo",
                  "villages": [
                    "Bushoka",
                    "Gatwa",
                    "Kabingo",
                    "Karango",
                    "Nyamugari",
                    "Rumasa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Jango",
                  "villages": [
                    "Gatagara",
                    "Gihura",
                    "Gitonde",
                    "Kinyonzo",
                    "Mubuga",
                    "Murehe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruli",
                  "villages": [
                    "Bariza",
                    "Gahondo",
                    "Gataba",
                    "Mugambazi",
                    "Ngayake",
                    "Nyakarambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwesero",
                  "villages": [
                    "Gatare",
                    "Gisizi",
                    "Mabago",
                    "Mugwato",
                    "Nyarunyinya"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rusasa",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gataba",
                  "villages": [
                    "Bumonyo A",
                    "Gahama",
                    "Gataba",
                    "Kebero",
                    "Kibaya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamonyi",
                  "villages": [
                    "Burinda",
                    "Gakindo",
                    "Gapfura",
                    "Gitwe",
                    "Kidomo",
                    "Nyagahama",
                    "Rurambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": ["Buharabuye", "Karuhunge", "Kirehe", "Nyange"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyundo",
                  "villages": [
                    "Bukingo",
                    "Bumonyo B",
                    "Gisovu",
                    "Nyundo",
                    "Tane"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rumbi",
                  "villages": ["Bukiza", "Buyora", "Bwanamo", "Ninda"]
                },
                {
                  "type": "CELLS",
                  "name": "Rurembo",
                  "villages": [
                    "Bushoka",
                    "Mazinga",
                    "Murori",
                    "Nyakabungo",
                    "Rugamba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rushashi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Burimba",
                  "villages": ["Kabuye", "Kara", "Kivumu"]
                },
                {
                  "type": "CELLS",
                  "name": "Busanane",
                  "villages": ["Gisenyi", "Gisiza", "Kanzuki", "Nyakagezi"]
                },
                {
                  "type": "CELLS",
                  "name": "Joma",
                  "villages": [
                    "Kineza",
                    "Mataba",
                    "Mwifuzo",
                    "Nyagasozi",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kageyo",
                  "villages": [
                    "Kabeza",
                    "Kabona",
                    "Karambi",
                    "Murambi",
                    "Nganzo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbogo",
                  "villages": [
                    "Bushoka",
                    "Buzoza",
                    "Gisanze",
                    "Gitongo",
                    "Nyabitare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Razi",
                  "villages": [
                    "Gahinga",
                    "Gikongoro",
                    "Kirwa",
                    "Nkoto",
                    "Nyangoyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwankuba",
                  "villages": [
                    "Giheta",
                    "Karushashi",
                    "Ngambi",
                    "Ruganda",
                    "Rwamabega"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shyombwe",
                  "villages": ["Gatare", "Gatwa", "Gihororo", "Murara"]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Gicumbi",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Bukure",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Karenge",
                  "villages": [
                    "Gasharu",
                    "Kabuga",
                    "Kagarama",
                    "Karenge",
                    "Muguruka",
                    "Nyarutovu",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigabiro",
                  "villages": [
                    "Gabiro",
                    "Kanyogote",
                    "Rugogwe",
                    "Rurama",
                    "Rwarenga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kivumu",
                  "villages": [
                    "Butare",
                    "Karambo",
                    "Karushya",
                    "Kivugiza",
                    "Kivumu",
                    "Ruyange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwesero",
                  "villages": [
                    "Gicaca",
                    "Karagari",
                    "Mugorore",
                    "Ntarama",
                    "Nyarubira"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Bwisige",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bwisige",
                  "villages": [
                    "Kabuye",
                    "Kavuruga",
                    "Kidandali",
                    "Ndoha",
                    "Nyakabungo",
                    "Nyarubuye",
                    "Nyarwina",
                    "Rutoma",
                    "Rwarurema"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gihuke",
                  "villages": [
                    "Cyamukanya",
                    "Kumana",
                    "Kumunini",
                    "Kuwindenge",
                    "Muneke",
                    "Murehe",
                    "Nyagakizi",
                    "Nyakagera",
                    "Nyamugari",
                    "Rurenge"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mukono",
                  "villages": [
                    "Akavuza",
                    "Murambi",
                    "Nyarumba",
                    "Nyirantungu",
                    "Rwebisheke",
                    "Rwondo",
                    "Ryakirayi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabushingitwa",
                  "villages": [
                    "Gahondo",
                    "Musayo",
                    "Ndayabana",
                    "Nyagatoma",
                    "Ruhuha",
                    "Warufu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Byumba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gacurabwenge",
                  "villages": [
                    "Gacurabwenge",
                    "Gasharu",
                    "Gashirwe",
                    "Rubyiniro",
                    "Ruyaga",
                    "Rwasama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisuna",
                  "villages": [
                    "Bereshi",
                    "Gatare",
                    "Gisuna",
                    "Kinihira I",
                    "Kinihira II",
                    "Rebero",
                    "Ruhashya",
                    "Rwiri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibali",
                  "villages": ["Gakenke", "Mugorore", "Rugarama", "Ruzo"]
                },
                {
                  "type": "CELLS",
                  "name": "Kivugiza",
                  "villages": ["Kabingo", "Karambi", "Kivugiza", "Mugandu"]
                },
                {
                  "type": "CELLS",
                  "name": "Murama",
                  "villages": ["Gacaca", "Rukereza", "Rurambi", "Taba"]
                },
                {
                  "type": "CELLS",
                  "name": "Ngondore",
                  "villages": ["Bukamba", "Gitovu", "Karambo", "Kimirimo"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakabungo",
                  "villages": ["Gacyamo", "Kabuga", "Kanunga", "Rugaragara"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamabuye",
                  "villages": [
                    "Gasiza",
                    "Gatete",
                    "Kumana",
                    "Mugomero",
                    "Nyiragasuruba",
                    "Rwabukoko",
                    "Umurara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarutarama",
                  "villages": [
                    "Kagarama",
                    "Mukeri",
                    "Muriza",
                    "Nyamiyaga",
                    "Nyamugali",
                    "Nyande",
                    "Nyarubande",
                    "Rugandu",
                    "Rugarama",
                    "Rwamuhuba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Cyumba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasunzu",
                  "villages": ["Mubuga", "Mugera", "Ryamuromba", "Zihare"]
                },
                {
                  "type": "CELLS",
                  "name": "Muhambo",
                  "villages": ["Kiliba", "Nyamabare", "Rugerero"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakabungo",
                  "villages": [
                    "Burambira",
                    "Gashija",
                    "Gatoki",
                    "Kabare",
                    "Kigombe",
                    "Remera",
                    "Ryaruhumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyambare",
                  "villages": ["Burambira", "Gipandi", "Remera", "Rusebeya"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyaruka",
                  "villages": [
                    "Burindi",
                    "Humura",
                    "Maya",
                    "Murore",
                    "Rusambya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwankonjo",
                  "villages": [
                    "Gatuna",
                    "Kagera",
                    "Keyebe",
                    "Kivuruga",
                    "Rukizi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Giti",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatobotobo",
                  "villages": [
                    "Kababito",
                    "Kabacuzi",
                    "Kagahumbi",
                    "Matyazo",
                    "Nyamirambo",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murehe",
                  "villages": [
                    "Bisika",
                    "Bushiranyota",
                    "Butare",
                    "Cyamabano",
                    "Gatare",
                    "Kabeza",
                    "Kigabiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Tanda",
                  "villages": [
                    "Gasharu",
                    "Mashyoza",
                    "Nganwa",
                    "Nyakabungo",
                    "Ruzizi",
                    "Tanda"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kageyo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gihembe",
                  "villages": [
                    "Gitaba",
                    "Karihira",
                    "Munini",
                    "Muyange",
                    "Nyaruvumu",
                    "Nyirabadugu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Horezo",
                  "villages": ["Kigoma", "Musetsa", "Nyirangoga", "Rukongi"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Gatobotobo",
                    "Gicumbi",
                    "Maya",
                    "Mukenke",
                    "Murama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhondo",
                  "villages": ["Kagwa", "Kamanyundo", "Kamwumba", "Mwange"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamiyaga",
                  "villages": [
                    "Gatare",
                    "Gatiba",
                    "Kabare",
                    "Kageyo",
                    "Mugomero",
                    "Musura",
                    "Mutobo",
                    "Rukomo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kaniga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bugomba",
                  "villages": [
                    "Gatare",
                    "Kabungo",
                    "Kajevuba",
                    "Nyaruhanga",
                    "Rugarama",
                    "Rugari",
                    "Ryakabanda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatoma",
                  "villages": [
                    "Gashiru",
                    "Kamabare",
                    "Nyakagera",
                    "Nyakara",
                    "Nyakibande",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mulindi",
                  "villages": [
                    "Centre Mulindi",
                    "Gisunzu",
                    "Kagorogoro",
                    "Kigwene",
                    "Nyakabungo",
                    "Rugenda",
                    "Ruhita",
                    "Rukizi",
                    "Runyinya",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarwambu",
                  "villages": [
                    "Cyasaku",
                    "Kabeza",
                    "Kanyaruyonga",
                    "Kinnyogo",
                    "Mushunga",
                    "Nyamabare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukurura",
                  "villages": [
                    "Kabare",
                    "Kamushure",
                    "Karambo",
                    "Ngabira",
                    "Nyagatare"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Manyagiro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Gabiro",
                    "Kigarama",
                    "Mugera",
                    "Murehe",
                    "Mutara",
                    "Rubindi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyiragifumba",
                  "villages": [
                    "Gacyamo",
                    "Kiyovu",
                    "Murambo",
                    "Rurambi",
                    "Rwamazi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyiravugiza",
                  "villages": ["Bugibwa", "Kajevuba", "Rurembo", "Rusebeya"]
                },
                {
                  "type": "CELLS",
                  "name": "Remera",
                  "villages": [
                    "Busa",
                    "Bushinga",
                    "Gasiza",
                    "Gitaba",
                    "Kabeza",
                    "Rugasa",
                    "Sangano",
                    "Shyigura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusekera",
                  "villages": [
                    "Gakubo",
                    "Kavure",
                    "Kiyovu",
                    "Nyamyumba",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ryaruyumba",
                  "villages": [
                    "Gatsyata",
                    "Gatungo",
                    "Muturirwa",
                    "Nyantarure",
                    "Nyarukombe",
                    "Rugasa",
                    "Rusabira",
                    "Taba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Miyove",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gakenke",
                  "villages": [
                    "Gisiza",
                    "Karwanira",
                    "Kirwa",
                    "Kivomo",
                    "Museke",
                    "Nyarurambi",
                    "Rugandu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Miyove",
                  "villages": [
                    "Kamonyi",
                    "Karambo",
                    "Mpinga",
                    "Mukaka",
                    "Murambo",
                    "Murehe",
                    "Nyamiyaga",
                    "Nyarubuye",
                    "Rebero",
                    "Remera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": [
                    "Gatare",
                    "Gitsimbura",
                    "Kabuga",
                    "Kacyiru",
                    "Kagote",
                    "Kaje",
                    "Kirwa",
                    "Kivumu",
                    "Mubuga",
                    "Murambo",
                    "Rutovu",
                    "Tetero"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mukarange",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyamuganga",
                  "villages": ["Burambira", "Ndarama", "Nyakabungo", "Rugarama"]
                },
                {
                  "type": "CELLS",
                  "name": "Gatenga",
                  "villages": [
                    "Ibereshi",
                    "Kagunga",
                    "Kiyorwa",
                    "Mugina",
                    "Nyacyoroma",
                    "Nyange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiruhura",
                  "villages": ["Burembo", "Gacwamba", "Kariba", "Nyamutoko"]
                },
                {
                  "type": "CELLS",
                  "name": "Mutarama",
                  "villages": [
                    "Gikore",
                    "Kaziba",
                    "Mafumirwa",
                    "Murara",
                    "Rugeshi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugerero",
                  "villages": [
                    "Gakizi",
                    "Kagarama",
                    "Kinnyogo",
                    "Munyege",
                    "Rurembo",
                    "Rushasha",
                    "Ruziku"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusambya",
                  "villages": ["Kabungo", "Kagane", "Nyagakizi", "Rusambya"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muko",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyamuhinda",
                  "villages": [
                    "Gicuregenya",
                    "Ntonyanga",
                    "Rugaragara",
                    "Rukazire",
                    "Rwamitembe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigoma",
                  "villages": [
                    "Cyerere",
                    "Gatobotobo",
                    "Karambi",
                    "Karumuli",
                    "Ryarwoga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwendo",
                  "villages": ["Gikumba", "Kabuye", "Kagogo", "Kirengo"]
                },
                {
                  "type": "CELLS",
                  "name": "Ngange",
                  "villages": [
                    "Gasharu",
                    "Kabare",
                    "Kimpongo",
                    "Mayora",
                    "Rudogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rebero",
                  "villages": [
                    "Gasizi",
                    "Karundi",
                    "Kirara",
                    "Kirwanirwa",
                    "Mayogi",
                    "Nyampundu",
                    "Ryagashaka"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mutete",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gaseke",
                  "villages": [
                    "Gasharu",
                    "Gihira",
                    "Irasaniro",
                    "Ngando",
                    "Nyamabuye",
                    "Nyamiryango",
                    "Nyamugari",
                    "Runyinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabeza",
                  "villages": [
                    "Busabira",
                    "Kabasega",
                    "Kagarama",
                    "Merezo",
                    "Minanire",
                    "Nyagasozi",
                    "Rusebeya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musenyi",
                  "villages": [
                    "Gataba",
                    "Karambi",
                    "Kimisugi",
                    "Muhororo",
                    "Rukondo",
                    "Rurama",
                    "Rutongo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mutandi",
                  "villages": [
                    "Gatare",
                    "Gihangara",
                    "Kamaganga",
                    "Karama",
                    "Karambi",
                    "Kariku",
                    "Muhengeri",
                    "Nyarubande"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarubuye",
                  "villages": [
                    "Gitega",
                    "Kajwejwe",
                    "Kavumu",
                    "Mataba",
                    "Nkenzi",
                    "Rugarama",
                    "Ruhondo",
                    "Rusumo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyamiyaga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gahumuliza",
                  "villages": ["Majyambere", "Maya", "Ruhango"]
                },
                {
                  "type": "CELLS",
                  "name": "Jamba",
                  "villages": ["Byimana", "Kamabuye", "Kumuremure", "Rugarama"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabeza",
                  "villages": ["Karambo", "Mataba", "Mugorore", "Rugari"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": ["Kabeza", "Kaduha", "Mubuga", "Nyarubuye"]
                },
                {
                  "type": "CELLS",
                  "name": "Karambo",
                  "villages": ["Gaseke", "Gatare", "Kinyinya", "Murama"]
                },
                {
                  "type": "CELLS",
                  "name": "Kiziba",
                  "villages": ["Gasave", "Karambi", "Nyirakagamba", "Rwingwe"]
                },
                {
                  "type": "CELLS",
                  "name": "Mataba",
                  "villages": ["Mataba", "Miyange", "Rugarama", "Ruyaga"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyankenke",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Butare",
                  "villages": [
                    "Gikombe",
                    "Kabere",
                    "Rwambeho",
                    "Rwirute",
                    "Ryabishanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigogo",
                  "villages": [
                    "Gakoma",
                    "Gasake",
                    "Gatare",
                    "Kiyovu",
                    "Ntabangira",
                    "Rusayu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kinishya",
                  "villages": [
                    "Gashiru",
                    "Kabuga",
                    "Nyagafunzo",
                    "Nyirantarengwa",
                    "Rwata"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusasa",
                  "villages": [
                    "Birumba",
                    "Mashyiga",
                    "Nyangezi",
                    "Rembero",
                    "Ruhoho"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutete",
                  "villages": [
                    "Kabingo",
                    "Kageje",
                    "Nyamugali",
                    "Ruhinga",
                    "Ryanterura",
                    "Shokero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwagihura",
                  "villages": [
                    "Gacaca",
                    "Kabahura",
                    "Kagogo",
                    "Mwendo",
                    "Rwagihura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Yaramba",
                  "villages": [
                    "Cyankaranka",
                    "Mwenyi",
                    "Nturo",
                    "Nyarubuye",
                    "Nyirakazo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rubaya",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gihanga",
                  "villages": [
                    "Gomba",
                    "Kirimbi",
                    "Nkurura",
                    "Runaba",
                    "Rusambya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gishambashayo",
                  "villages": ["Gashiru", "Karambo"]
                },
                {
                  "type": "CELLS",
                  "name": "Gishari",
                  "villages": ["Kabaya", "Kagugo", "Mugote", "Nyakesha"]
                },
                {
                  "type": "CELLS",
                  "name": "Muguramo",
                  "villages": ["Centre Rubaya", "Gasheke", "Mabare", "Ngange"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamiyaga",
                  "villages": ["Kabeza", "Kiriba", "Mariba"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rukomo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyeya",
                  "villages": [
                    "Birambo",
                    "Bisika",
                    "Bwuhira",
                    "Gateke",
                    "Kanombe",
                    "Rwambungo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyuru",
                  "villages": [
                    "Bukamba",
                    "Kabuga",
                    "Karengo",
                    "Kimiko",
                    "Muhama",
                    "Nyamutezi",
                    "Sabiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisiza",
                  "villages": [
                    "Gatare",
                    "Gitaba",
                    "Karambi",
                    "Nyarubuye",
                    "Rushubi",
                    "Rusumo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kinyami",
                  "villages": [
                    "Gahondo",
                    "Gasharara",
                    "Kariba",
                    "Kivugiza",
                    "Meshero",
                    "Rukomo",
                    "Ryarubanza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mabare",
                  "villages": [
                    "Cyingoma",
                    "Kanyiramana",
                    "Kararama",
                    "Kayungwe",
                    "Mburamazi",
                    "Murambo",
                    "Ryandinda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munyinya",
                  "villages": [
                    "Kabeza",
                    "Kabuga",
                    "Mataba",
                    "Munyinya",
                    "Nyankokoma",
                    "Rwamushumba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rushaki",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gitega",
                  "villages": [
                    "Bugwe",
                    "Gisiza",
                    "Gitega",
                    "Kabo",
                    "Karambi",
                    "Karambo",
                    "Rubyiro",
                    "Ryaruganzu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamutora",
                  "villages": [
                    "Gashinge",
                    "Kabuga",
                    "Kamutora",
                    "Karwoga",
                    "Mabare",
                    "Nkamba",
                    "Nyamyumba",
                    "Remera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karurama",
                  "villages": [
                    "C. Rushaki",
                    "Gatonde",
                    "Izinga",
                    "Mbuga",
                    "Ngabira",
                    "Nyaruhanga",
                    "Rumuri",
                    "Rwaranda"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rutare",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bikumba",
                  "villages": [
                    "Karugeyo",
                    "Kintaganirwa",
                    "Marembo",
                    "Matyazo",
                    "Nyabisindu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasharu",
                  "villages": [
                    "Buyegero",
                    "Kabagabo",
                    "Kabusunzu",
                    "Kagarama",
                    "Rwimbogo",
                    "Yogi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatwaro",
                  "villages": ["Bureranyana", "Gashinya", "Kabira", "Kanaba"]
                },
                {
                  "type": "CELLS",
                  "name": "Kigabiro",
                  "villages": [
                    "Kabuye",
                    "Munini",
                    "Nyakabingo",
                    "Nyakavunga",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munanira",
                  "villages": [
                    "Bushokanyambo",
                    "Gasharu",
                    "Kirwa",
                    "Mataba",
                    "Ruti"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkoto",
                  "villages": [
                    "Bariza",
                    "Bwangamwanda",
                    "Murehe",
                    "Nyagatoma",
                    "Nyansenge"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ruvune",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyandaro",
                  "villages": [
                    "Karambo",
                    "Kigarama",
                    "Mushesho",
                    "Nyankokoma",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasambya",
                  "villages": [
                    "Karambi",
                    "Kirara",
                    "Mataba",
                    "Nyamirama",
                    "Ruhete",
                    "Ryasunzu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gashirira",
                  "villages": [
                    "Kagasha",
                    "Nyarubuye",
                    "Nyarurama",
                    "Nyarwina",
                    "Remera",
                    "Rugerero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabare",
                  "villages": ["Buyanja", "Murehe", "Nyarusange", "Taba"]
                },
                {
                  "type": "CELLS",
                  "name": "Rebero",
                  "villages": [
                    "Bitoma",
                    "Burambo",
                    "Gatare",
                    "Kirwa",
                    "Mwanza",
                    "Rwaburegeya",
                    "Rwamiko",
                    "Sunzu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhondo",
                  "villages": [
                    "Gatoki",
                    "Karambo",
                    "Kirwa",
                    "Mugorore",
                    "Nyagakizi",
                    "Nyakaju",
                    "Rwinyana"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rwamiko",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyeru",
                  "villages": [
                    "Bugarura",
                    "Gabiro",
                    "Kamurenzi",
                    "Karika",
                    "Mukuyu",
                    "Murambi",
                    "Nyagasozi",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigabiro",
                  "villages": [
                    "Cyiri",
                    "Kabira",
                    "Kanyove",
                    "Karangara",
                    "Mutambiko",
                    "Rubuye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagahinga",
                  "villages": [
                    "Kabusunzu",
                    "Kibiraro",
                    "Kigaga",
                    "Ntaremba",
                    "Rugarama"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Shangasha",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bushara",
                  "villages": ["Bushara", "Gasura", "Gatare", "Nganzo"]
                },
                {
                  "type": "CELLS",
                  "name": "Kitazigurwa",
                  "villages": [
                    "Gacyamo",
                    "Iharama",
                    "Mubuga",
                    "Ntomvu",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabishambi",
                  "villages": [
                    "Gasiza",
                    "Kagali",
                    "Karambo",
                    "Matyazo",
                    "Murambo",
                    "Rukiniro",
                    "Rutete"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabubare",
                  "villages": [
                    "Bikumba",
                    "Irembo",
                    "Karuhanga",
                    "Nyakabingo",
                    "Nyamiyaga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shangasha",
                  "villages": [
                    "Ituze",
                    "Kabeza",
                    "Kajyanjyali",
                    "Rugali",
                    "Runaba",
                    "Ryamatebura"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Musanze",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Busogo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gisesero",
                  "villages": ["Gahanga", "Jabiro", "Kabaya", "Nengo"]
                },
                {
                  "type": "CELLS",
                  "name": "Kavumu",
                  "villages": [
                    "Gatovu",
                    "Karema",
                    "Karuriza",
                    "Mutaboneka",
                    "Rugeshi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagisozi",
                  "villages": [
                    "Cyasure",
                    "Gora",
                    "Kabwenge",
                    "Kirezi",
                    "Rurembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sahara",
                  "villages": ["Nyarubuye", "Nyiragaju", "Rubaya", "Ryamukutsi"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Cyuve",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bukinanyana",
                  "villages": [
                    "Bubandu",
                    "Mubwiza",
                    "Murambi",
                    "Mwidagaduro",
                    "Mwirongi",
                    "Rugeshi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Buruba",
                  "villages": [
                    "Bazizana",
                    "Kabahama",
                    "Kamenantare",
                    "Ruhindinka",
                    "Rutemba",
                    "Ruvumu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyanya",
                  "villages": [
                    "Kabaya",
                    "Karugabanya",
                    "Kayange",
                    "Kibande",
                    "Mubari",
                    "Mubuga",
                    "Mugarama",
                    "Rebero",
                    "Ruhehe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabeza",
                  "villages": [
                    "Bucuzi",
                    "Gashangiro",
                    "Kareba",
                    "Karinzi",
                    "Karunyura",
                    "Kungo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Migeshi",
                  "villages": [
                    "Buremu",
                    "Gakenke",
                    "Kabaya",
                    "Kamanga",
                    "Kiviriza",
                    "Mugari",
                    "Nyaruyaga",
                    "Rabika"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwebeya",
                  "villages": [
                    "Marantima",
                    "Mubuga",
                    "Nganzo",
                    "Nyarubande",
                    "Nyiraruhengeri"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gacaca",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gakoro",
                  "villages": [
                    "Butunda",
                    "Cyiri",
                    "Gahama",
                    "Murora",
                    "Murundo",
                    "Nkomero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasakuza",
                  "villages": [
                    "Gasenyi",
                    "Gataba",
                    "Karushenyi",
                    "Nyamugari",
                    "Ruhasa",
                    "Rurambo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabirizi",
                  "villages": [
                    "Gitovu",
                    "Kabushanda",
                    "Kanama",
                    "Karama",
                    "Mata",
                    "Mukungwa",
                    "Rungu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karwasa",
                  "villages": [
                    "Burengo",
                    "Kabukende",
                    "Karambi",
                    "Kavumu",
                    "Sarazi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gashaki",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kigabiro",
                  "villages": [
                    "Birwa",
                    "Butate",
                    "Buzoza",
                    "Kavumu",
                    "Musekera",
                    "Shanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kivumu",
                  "villages": [
                    "Burango",
                    "Kamatete",
                    "Makara",
                    "Nyakariba",
                    "Ruhehe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbwe",
                  "villages": [
                    "Budiho",
                    "Gatete",
                    "Kamato",
                    "Kanzo",
                    "Ngambi",
                    "Raro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muharuro",
                  "villages": [
                    "Bugabo",
                    "Karuganda",
                    "Kibinyogote",
                    "Mucaca",
                    "Murandi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gataraga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Mudakama",
                  "villages": [
                    "Gakuku",
                    "Kagongo",
                    "Kararo",
                    "Mikingo",
                    "Rubaka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murago",
                  "villages": [
                    "Karurambi",
                    "Manjari",
                    "Rukingo",
                    "Rusambu",
                    "Rwinzovu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubindi",
                  "villages": [
                    "Butakanyundo",
                    "Gacondo",
                    "Gataraga",
                    "Kabaya",
                    "Kaberege"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rungu",
                  "villages": [
                    "Gahira",
                    "Gatondori",
                    "Gatovu",
                    "Kampande",
                    "Nyarubande"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kimonyi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Birira",
                  "villages": [
                    "Gakoro",
                    "Kabagoyi",
                    "Kadahenda",
                    "Mbugayera",
                    "Rurembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Buramira",
                  "villages": [
                    "Kabaya",
                    "Kagwene",
                    "Kamugeni",
                    "Nyiramuyenzi",
                    "Ruhinga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kivumu",
                  "villages": [
                    "Masoro",
                    "Muregeya",
                    "Musezero",
                    "Ndorahe",
                    "Nyamugari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbizi",
                  "villages": ["Buhuma", "Bushubi", "Gatumo", "Rugondo"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kinigi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bisoke",
                  "villages": [
                    "Bunyenyeri",
                    "Kamata",
                    "Karambi",
                    "Kazi",
                    "Kumazi",
                    "Shonero",
                    "Susa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kaguhu",
                  "villages": [
                    "Kabeza",
                    "Kaniga",
                    "Impano",
                    "Musingi",
                    "Myase",
                    "Nyarusizi",
                    "Nyundo",
                    "Rugeshi",
                    "Ruginga",
                    "Rurembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kampanga",
                  "villages": [
                    "Kamakara",
                    "Muhe",
                    "Nyarubande",
                    "Nyejoro",
                    "Rubara",
                    "Rugi",
                    "Rutindo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabigoma",
                  "villages": [
                    "Cyabirego",
                    "Gahura",
                    "Gasizi",
                    "Kabatwa",
                    "Karyasenge",
                    "Mitobo",
                    "Nyakagezi",
                    "Nyakigina",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyonirima",
                  "villages": [
                    "Bazizana",
                    "Butorwa I",
                    "Butorwa II",
                    "Gahisi",
                    "Gasura",
                    "Kansoro",
                    "Kanyampereri",
                    "Nyagisenyi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muhoza",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyabararika",
                  "villages": [
                    "Buhuye",
                    "Bwuzuri",
                    "Gasanze",
                    "Gatare",
                    "Gatorwa",
                    "Kabogobogo",
                    "Yorodani"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigombe",
                  "villages": [
                    "Kavumu",
                    "Kiryi",
                    "Mugara",
                    "Nduruma",
                    "Nyamagumba",
                    "Nyamuremure",
                    "Rukereza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mpenge",
                  "villages": [
                    "Gikwege",
                    "Giramahoro",
                    "Mpenge",
                    "Rukoro",
                    "Rusagara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhengeri",
                  "villages": [
                    "Buhoro",
                    "Burera",
                    "Bushozi",
                    "Byimana",
                    "Kabaya",
                    "Muhe",
                    "Susa"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muko",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyivugiza",
                  "villages": [
                    "Gakoro",
                    "Kabudundu",
                    "Kamutara",
                    "Karebero",
                    "Karwabigwi",
                    "Nyagahondo",
                    "Nyakanama",
                    "Nyiramuko",
                    "Sangano",
                    "Susa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyogo",
                  "villages": [
                    "Kabere",
                    "Kadahenda",
                    "Karabiro",
                    "Karuyege",
                    "Nyagasambu",
                    "Rubanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mburabuturo",
                  "villages": [
                    "Bugese",
                    "Kabindi",
                    "Kigasa",
                    "Musenyi",
                    "Mwanganzara",
                    "Ngabane",
                    "Ntindo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Songa",
                  "villages": [
                    "Buhano",
                    "Butare",
                    "Kamaheke",
                    "Karambo",
                    "Kavumu",
                    "Kibuye",
                    "Mubago"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Musanze",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyabagarura",
                  "villages": [
                    "Bitare",
                    "Bukane",
                    "Gaturo",
                    "Gikeri",
                    "Kabaya",
                    "Kageyo",
                    "Kanyabirayi",
                    "Kiroba",
                    "Rugeyo",
                    "Ruvumu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Garuka",
                  "villages": [
                    "Cyanturo",
                    "Gacinyiro",
                    "Gapfuro",
                    "Kanganwa",
                    "Kanyaminaba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabazungu",
                  "villages": [
                    "Bihinga",
                    "Kidendezi",
                    "Mufukuro",
                    "Nyabageni",
                    "Rucumu",
                    "Rwunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarubuye",
                  "villages": [
                    "Bannyisuka",
                    "Kareba",
                    "Kavumbu",
                    "Murenzi",
                    "Nturo",
                    "Tero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwambogo",
                  "villages": [
                    "Buhunge",
                    "Gakoro",
                    "Kirerema",
                    "Nyarubande",
                    "Runyangwe",
                    "Rwunga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nkotsi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bikara",
                  "villages": [
                    "Barizo",
                    "Kabaya",
                    "Karambi",
                    "Kindiki",
                    "Kinkware",
                    "Kiruhura",
                    "Nyakinama",
                    "Rubindi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gashinga",
                  "villages": ["Buhanga", "Gitaraga", "Kabasaza", "Musebeya"]
                },
                {
                  "type": "CELLS",
                  "name": "Mubago",
                  "villages": [
                    "Bugugu",
                    "Buhamo",
                    "Musembe",
                    "Nyagahondo",
                    "Nyarubingo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugeshi",
                  "villages": [
                    "Bigabiro",
                    "Gahanga",
                    "Gasebeya",
                    "Karambo",
                    "Mucyamo",
                    "Mutuzo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruyumba",
                  "villages": [
                    "Cyivugiza",
                    "Gasiza",
                    "Kamusheshe",
                    "Murindi",
                    "Nyakigezi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyange",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyivugiza",
                  "villages": [
                    "Gasoroza",
                    "Kagano",
                    "Kageshi",
                    "Mugwati",
                    "Muhe",
                    "Nyabitare",
                    "Rugarama",
                    "Rusenge",
                    "Terimbere"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabeza",
                  "villages": [
                    "Gahama",
                    "Kansoro",
                    "Kibingo",
                    "Ntamiziro",
                    "Nyarubuye",
                    "Riboneye",
                    "Rwebeya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamwumba",
                  "villages": [
                    "Kabaya",
                    "Kamajaga",
                    "Kamicaca",
                    "Musenyi",
                    "Ntarama",
                    "Rugari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhabura",
                  "villages": [
                    "Bazizana",
                    "Bihinga",
                    "Bukingo",
                    "Buramba",
                    "Jite",
                    "Micaca",
                    "Nkogote",
                    "Ntarama",
                    "Ntebe",
                    "Rugwiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ninda",
                  "villages": [
                    "Garuka",
                    "Gisigwa",
                    "Kabagorozi",
                    "Kabara",
                    "Kabari",
                    "Kareba",
                    "Nkiriza",
                    "Nyabutaka",
                    "Nyakagezi",
                    "Nyamiyaga",
                    "Nyarubande"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Remera",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasongero",
                  "villages": [
                    "Bukara",
                    "Gitega",
                    "Mugogo",
                    "Nyakibande",
                    "Rususa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamisave",
                  "villages": [
                    "Kabara",
                    "Kamurera",
                    "Mikamo",
                    "Mukinga",
                    "Rugari",
                    "Ryampunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murandi",
                  "villages": [
                    "Buhogo",
                    "Kabagora",
                    "Karuruma",
                    "Muganda",
                    "Nyirabisekuro",
                    "Nyundo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murwa",
                  "villages": [
                    "Giseke",
                    "Gitwa",
                    "Kabashima",
                    "Kamanga",
                    "Mwiyandiro",
                    "Ngenzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rurambo",
                  "villages": [
                    "Bitsibo",
                    "Gatare",
                    "Kabusozo",
                    "Kintashya",
                    "Mugeshi",
                    "Nyanza"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rwaza",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bumara",
                  "villages": [
                    "Gisorora",
                    "Kabuye",
                    "Kavumu",
                    "Muheta",
                    "Nyakarambi II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabushinge",
                  "villages": [
                    "Busana",
                    "Gihango",
                    "Kabuga",
                    "Murambi",
                    "Nyagisozi",
                    "Nyarugando",
                    "Ramba",
                    "Rwamigimbu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musezero",
                  "villages": [
                    "Kamabuye",
                    "Kansenda",
                    "Kibingo",
                    "Kiganda",
                    "Mataba",
                    "Mutara",
                    "Nyakarambi I"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nturo",
                  "villages": [
                    "Gakenke",
                    "Mugogo",
                    "Rubabi",
                    "Rugari",
                    "Rugogwe",
                    "Ruvumu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarubuye",
                  "villages": [
                    "Buhama",
                    "Bukoro",
                    "Kanama",
                    "Murambi",
                    "Ngege",
                    "Rusaki",
                    "Sayo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Shingiro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gakingo",
                  "villages": [
                    "Burengo",
                    "Bwamazi",
                    "Gasura",
                    "Kabeza",
                    "Kadahenda",
                    "Karwesero",
                    "Mutuzo",
                    "Ryambungira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibuguzo",
                  "villages": [
                    "Bikereri",
                    "Byimana",
                    "Cyimbazi",
                    "Mutuzo",
                    "Nyundo",
                    "Rwinuma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mudende",
                  "villages": [
                    "Budasubira",
                    "Nyamiyaga",
                    "Nyarutembe",
                    "Rubagara",
                    "Rutagara",
                    "Vubiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mugari",
                  "villages": [
                    "Kabagabo",
                    "Kabeza",
                    "Kimanzi",
                    "Nyakagezi",
                    "Rebero",
                    "Terimbere"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Rulindo",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Base",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyohoha",
                  "villages": [
                    "Bukangano",
                    "Buramba",
                    "Gihemba",
                    "Gitwa",
                    "Kabingo",
                    "Kabuga",
                    "Musenyi",
                    "Mushongi",
                    "Nyangoyi",
                    "Rubanda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitare",
                  "villages": [
                    "Bushyiga",
                    "Gatete",
                    "Gihora",
                    "Gisiza",
                    "Kirwa",
                    "Mugenda I",
                    "Mugenda II",
                    "Nyamugali",
                    "Rugaragara",
                    "Rugerero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwamahwa",
                  "villages": [
                    "Base",
                    "Cyondo",
                    "Gitovu",
                    "Kabahama",
                    "Kabeza",
                    "Karambi",
                    "Kiruli",
                    "Mutima"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Burega",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Butangampundu",
                  "villages": [
                    "Gacyamo",
                    "Gashinge",
                    "Karambi",
                    "Karugaju",
                    "Kerera",
                    "Kibiraro",
                    "Kigabiro",
                    "Kigarama",
                    "Kisigiro",
                    "Mayaga",
                    "Muduha",
                    "Muhondo",
                    "Nyamiyaga",
                    "Runyinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karengeri",
                  "villages": [
                    "Bugoboka",
                    "Byerwa",
                    "Gasare",
                    "Gasharu",
                    "Gashinge",
                    "Gatete",
                    "Kantabo",
                    "Kanunga",
                    "Kizenga",
                    "Kiziba",
                    "Mataba",
                    "Mitabi",
                    "Mukarange",
                    "Rwamiko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Taba",
                  "villages": [
                    "Bugarama",
                    "Cyinzuzi",
                    "Gasango",
                    "Kiboha",
                    "Kivomo",
                    "Mwenene",
                    "Mwite",
                    "Ngange",
                    "Nyagisozi",
                    "Rubara",
                    "Rusine",
                    "Ryinzovu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Bushoki",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasiza",
                  "villages": [
                    "Budaha",
                    "Buhande",
                    "Gitwa",
                    "Karambi",
                    "Remera",
                    "Ruhanga",
                    "Rulindo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Giko",
                  "villages": [
                    "Buramira",
                    "Cyiri",
                    "Gashiru",
                    "Karambo",
                    "Kigamba",
                    "Kivomo",
                    "Ngarama",
                    "Rugote"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kayenzi",
                  "villages": [
                    "Gitaba",
                    "Muduha",
                    "Murambo",
                    "Rebero",
                    "Rwanzu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mukoto",
                  "villages": [
                    "Buvumo",
                    "Buyogoma",
                    "Gatare",
                    "Marembo",
                    "Muko",
                    "Mukoto",
                    "Rusave"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyirangarama",
                  "villages": [
                    "Bubiro",
                    "Byimana",
                    "Gatenga",
                    "Gifuba",
                    "Karambi",
                    "Nyenyeri",
                    "Nyirangarama",
                    "Remera",
                    "Tare",
                    "Terambere"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Buyoga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Busoro",
                  "villages": [
                    "Gashana",
                    "Gatwa",
                    "Karambo",
                    "Kibanda",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Butare",
                  "villages": [
                    "Gasave",
                    "Giko",
                    "Kankanga",
                    "Karambi",
                    "Ryanyirakayobe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gahororo",
                  "villages": [
                    "Bunyana",
                    "Gatare",
                    "Gatenderi",
                    "Gipfundo",
                    "Gitabura",
                    "Shagasha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitumba",
                  "villages": [
                    "Gitaba",
                    "Munini",
                    "Nyarubuye",
                    "Remera",
                    "Rutabo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karama",
                  "villages": [
                    "Cyasenge",
                    "Kajeneni",
                    "Karambi",
                    "Karambo",
                    "Kavumo",
                    "Kigarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwumba",
                  "villages": [
                    "Gakoma",
                    "Mataba",
                    "Murambo",
                    "Nyamwiza",
                    "Nyarubuye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ndarage",
                  "villages": [
                    "Gahondo",
                    "Gikingo",
                    "Kagozi",
                    "Karambi",
                    "Kimagali"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Cyinzuzi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Budakiranya",
                  "villages": [
                    "Gatagara",
                    "Gihinga",
                    "Kamatongo",
                    "Kanyoni",
                    "Kavumu",
                    "Kigarama",
                    "Nyakabanga",
                    "Rugaragara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Migendezo",
                  "villages": [
                    "Cyanya",
                    "Gitabage",
                    "Karambo",
                    "Marembo",
                    "Ngabitsinze",
                    "Nyamugali",
                    "Remera",
                    "Rusagara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rudogo",
                  "villages": [
                    "Gasekabuye",
                    "Gaseke",
                    "Gasizi",
                    "Gihuke",
                    "Kirambo",
                    "Munini",
                    "Munoga",
                    "Musenyi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Cyungo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Burehe",
                  "villages": [
                    "Gitandi",
                    "Karambo",
                    "Karengeri",
                    "Kibande",
                    "Kibogora",
                    "Nyagatovu",
                    "Sove"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Marembo",
                  "villages": [
                    "Buyaga",
                    "Gahinga",
                    "Kibuye",
                    "Kidomo",
                    "Murambo",
                    "Nganzo",
                    "Rugaragara",
                    "Rusayu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwili",
                  "villages": [
                    "Kabanda",
                    "Karambi",
                    "Kirwa",
                    "Kivumu",
                    "Nturo",
                    "Nyabisasa",
                    "Sakara"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kinihira",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Butunzi",
                  "villages": [
                    "Akamiyove",
                    "Barayi",
                    "Bunahi",
                    "Gisekuru",
                    "Kinihira",
                    "Ndorandi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karegamazi",
                  "villages": [
                    "Buhita",
                    "Bwishya",
                    "Gatembe",
                    "Magezi",
                    "Mutoyi",
                    "Ntunguru"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Marembo",
                  "villages": ["Buhunde", "Cyogo", "Gatare", "Kigali", "Kiyebe"]
                },
                {
                  "type": "CELLS",
                  "name": "Rebero",
                  "villages": [
                    "Kabuga",
                    "Karambi",
                    "Kirwa",
                    "Ndusu",
                    "Rugundu",
                    "Taba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kisaro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gitatsa",
                  "villages": ["Kabere", "Ndago", "Ruberano", "Rwili"]
                },
                {
                  "type": "CELLS",
                  "name": "Kamushenyi",
                  "villages": [
                    "Gakenke",
                    "Gatete",
                    "Gatovu",
                    "Kabeza",
                    "Karambi",
                    "Songa",
                    "Wamahoro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigarama",
                  "villages": [
                    "Gaseke",
                    "Gasharu",
                    "Nyantabo",
                    "Runyinya",
                    "Rwintare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": [
                    "Gako",
                    "Kibuye",
                    "Kirenge",
                    "Murambi",
                    "Nyakarekare",
                    "Rutabo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murama",
                  "villages": [
                    "Akamanama",
                    "Gishinge",
                    "Karambi",
                    "Kibingwe",
                    "Mugomero",
                    "Ryarubuguza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sayo",
                  "villages": [
                    "Cyasuri",
                    "Kibanda",
                    "Nyamiyaga",
                    "Rugarama",
                    "Rusongati",
                    "Rusumo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Masoro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Gisiza",
                    "Kanunga",
                    "Karambi",
                    "Kigarama",
                    "Nyakibande",
                    "Nyakizu",
                    "Rubaya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigarama",
                  "villages": ["Gacyamo", "Marenge", "Nyakabungo", "Rukurazo"]
                },
                {
                  "type": "CELLS",
                  "name": "Kivugiza",
                  "villages": ["Gasenga", "Musega", "Nyarurembo", "Rebero"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamyumba",
                  "villages": [
                    "Kabeza",
                    "Kabuga",
                    "Kigomwa",
                    "Marembo",
                    "Rusenyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shengampuli",
                  "villages": [
                    "Agasharu",
                    "Amataba",
                    "Nyabinyana",
                    "Rusine",
                    "Umubuga",
                    "Umutagata"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mbogo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bukoro",
                  "villages": [
                    "Buhira",
                    "Bukoro",
                    "Gasama",
                    "Gihonga",
                    "Kalindi",
                    "Kibamba",
                    "Kibaya",
                    "Kinini Ya Mbogo",
                    "Ruhanya",
                    "Rwambogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mushari",
                  "villages": [
                    "Bukongi",
                    "Buraro",
                    "Buyanja",
                    "Gitaba",
                    "Nkurura",
                    "Nyakabuye",
                    "Rwambogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngiramazi",
                  "villages": [
                    "Gasovu",
                    "Gikombe",
                    "Gisha",
                    "Kibungo",
                    "Muhora",
                    "Nyakabembe",
                    "Yaramba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rurenge",
                  "villages": [
                    "Gakoma",
                    "Gicumbi",
                    "Gitaba",
                    "Karehe",
                    "Munini",
                    "Ruhondo",
                    "Rurenge",
                    "Rutonde"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Murambi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bubangu",
                  "villages": [
                    "Gashubi",
                    "Karambo",
                    "Karwa",
                    "Mayange",
                    "Nyagisozi",
                    "Rebero",
                    "Ruhunga",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatwa",
                  "villages": [
                    "Agatare",
                    "Akarambi",
                    "Amataba",
                    "Gisiza",
                    "Kabeza",
                    "Karambo",
                    "Kigarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mugambazi",
                  "villages": [
                    "Amahoro",
                    "Buliza",
                    "Gahama",
                    "Gashinge",
                    "Kigarama",
                    "Nyarurembo",
                    "Ruri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mvuzo",
                  "villages": [
                    "Iraro",
                    "Kabeza",
                    "Kabuga",
                    "Munyinya",
                    "Mutabo",
                    "Ntyaba",
                    "Rurama"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ngoma",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Gatete",
                    "Kagarama",
                    "Kirambo",
                    "Kiruli",
                    "Nyabuko",
                    "Rubona"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambo",
                  "villages": [
                    "Butare",
                    "Jyambere",
                    "Kagwa",
                    "Karambi",
                    "Marebe",
                    "Nyakagezi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mugote",
                  "villages": [
                    "Cyabasigi",
                    "Kiboha",
                    "Kigina",
                    "Mwishya",
                    "Nyakibyeyi",
                    "Riryi",
                    "Rukoma",
                    "Sakara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munyarwanda",
                  "villages": [
                    "Busizi",
                    "Gaseke",
                    "Kirungu",
                    "Muyange",
                    "Ngaru",
                    "Nyaruvumu",
                    "Rushayu",
                    "Rushubi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ntarabana",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kajevuba",
                  "villages": [
                    "Bikamba",
                    "Cyamutara",
                    "Gitambi",
                    "Kazi",
                    "Nyakambu",
                    "Nyarubuye",
                    "Rukore",
                    "Rusasa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiyanza",
                  "villages": [
                    "Gatobotobo",
                    "Kabirizi",
                    "Kivubwe",
                    "Kiyanza I",
                    "Nombe",
                    "Nyagisozi",
                    "Nyamurema",
                    "Nyarurama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mahaza",
                  "villages": [
                    "Burambi",
                    "Gitwa",
                    "Kamuhororo",
                    "Karera",
                    "Kayenzi",
                    "Kibeho",
                    "Rugogwe",
                    "Rusekabuye"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rukozo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buraro",
                  "villages": [
                    "Kabgayi",
                    "Kabingo",
                    "Kamiyove",
                    "Kivomo",
                    "Murwa",
                    "Nyenyeri",
                    "Rukingu",
                    "Shyondwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bwimo",
                  "villages": [
                    "Bushyana",
                    "Gatiba",
                    "Gatwa",
                    "Kadendegeri",
                    "Kavumo",
                    "Mwana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mberuka",
                  "villages": [
                    "Gahwazi",
                    "Gakubo",
                    "Kabera",
                    "Mataba",
                    "Mutungo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbuye",
                  "villages": [
                    "Kibare",
                    "Mujebe",
                    "Musave",
                    "Nyarusebeya",
                    "Ruhanga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rusiga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gako",
                  "villages": [
                    "Gifumba",
                    "Kabunigu",
                    "Kabuye",
                    "Nkanga",
                    "Ntakara",
                    "Rwintare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kirenge",
                  "villages": ["Kigarama", "Kinini-rusiga", "Ntaruka", "Rebero"]
                },
                {
                  "type": "CELLS",
                  "name": "Taba",
                  "villages": [
                    "Bitare",
                    "Gahondo",
                    "Karambi",
                    "Karenge",
                    "Kingazi",
                    "Nyakarama"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Shyorongi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bugaragara",
                  "villages": [
                    "Gatimba",
                    "Gatwa",
                    "Gisiza",
                    "Kabaraza",
                    "Kigarama",
                    "Kiziranyenzi",
                    "Nyakaruri",
                    "Nyarushinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kijabagwe",
                  "villages": [
                    "Gaseke",
                    "Kabagabaga",
                    "Kabakene",
                    "Nyamugari",
                    "Rimwe",
                    "Rugendabari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muvumu",
                  "villages": [
                    "Cyikera",
                    "Kagunda",
                    "Karama",
                    "Kavoma",
                    "Kirurumo",
                    "Kivili",
                    "Mukumba",
                    "Muvumu",
                    "Nyabubare",
                    "Ruhanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubona",
                  "villages": [
                    "Bwimo",
                    "Gishyita",
                    "Kigali",
                    "Ngona",
                    "Nyabitare",
                    "Nyarunyinya",
                    "Nyarusange",
                    "Rwahi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutonde",
                  "villages": [
                    "Bugarura",
                    "Mwagiro",
                    "Ngendo",
                    "Nyabisindu",
                    "Nyabyondo",
                    "Nyamirembe",
                    "Rutonde",
                    "Rweya"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Tumba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Barari",
                  "villages": [
                    "Gaseke",
                    "Gashoro",
                    "Karambi",
                    "Kigarama",
                    "Rukore"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gahabwa",
                  "villages": [
                    "Kabuga",
                    "Kagusa",
                    "Mafene",
                    "Munyinya",
                    "Rushaki"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Misezero",
                  "villages": [
                    "Kanaba",
                    "Karambi",
                    "Kavumu",
                    "Marembo",
                    "Misezero",
                    "Rurambo",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyirabirori",
                  "villages": [
                    "Bukinga",
                    "Gatare",
                    "Gatsinde",
                    "Gihanga",
                    "Murambi",
                    "Rugando",
                    "Rusura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Taba",
                  "villages": [
                    "Kamuragi",
                    "Mwili",
                    "Nkinda",
                    "Nyirambuga",
                    "Nyirataba",
                    "Ruvumba"
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "type": "PROVINCE",
      "name": "South",
      "districts": [
        {
          "type": "DISTRICT",
          "name": "Gisagara",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Gikonko",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyiri",
                  "villages": [
                    "Curusi",
                    "Cyendajuru",
                    "Cyimpuga",
                    "Katiro",
                    "Kigitega",
                    "Kinyana",
                    "Murambi",
                    "Musambi",
                    "Sanzu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasagara",
                  "villages": [
                    "Agasenyi",
                    "Karukambira",
                    "Bibungo",
                    "Gasagara",
                    "Karehe",
                    "Mugusa",
                    "Remera",
                    "Mubezi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gikonko",
                  "villages": [
                    "Gahabwa",
                    "Karubondo",
                    "Manyinya",
                    "Rugarama",
                    "Runyinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbogo",
                  "villages": [
                    "Bukorota",
                    "Buremera",
                    "Kirivuga",
                    "Mbogo",
                    "Nyakabuye",
                    "Nyiramageni",
                    "Rwatano",
                    "Rwintare"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gishubi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gabiro",
                  "villages": [
                    "Busave",
                    "Kigozi",
                    "Kivugiza",
                    "Kurugogwe",
                    "Nyamure",
                    "Nyundo",
                    "Ruhina",
                    "Kurutare",
                    "Rweza",
                    "Tamba",
                    "Zamwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabitare",
                  "villages": [
                    "Hemba",
                    "Kabuga",
                    "Kanombe",
                    "Mutobo",
                    "Mwiba",
                    "Ndaro",
                    "Nyabisindu",
                    "Nyirakanywero",
                    "Rwinkwavu",
                    "Ryarugaju"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakibungo",
                  "villages": [
                    "Banga",
                    "Gicaca",
                    "Kavumu",
                    "Kibindyi",
                    "Munyinya",
                    "Nkunamo",
                    "Nyakibungo",
                    "Nyarurama",
                    "Rebero",
                    "Rugarama",
                    "Rusasa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyeranzi",
                  "villages": [
                    "Cyamanyeri",
                    "Gikuyo",
                    "Gishya",
                    "Gitekateke",
                    "Kabungo",
                    "Kagoma",
                    "Kavumu",
                    "Kigarama",
                    "Muduha",
                    "Muyinza",
                    "Nyabyunyu",
                    "Rebero",
                    "Rugogwe",
                    "Rwanza",
                    "Rwegura",
                    "Sakara"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kansi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Akaboti",
                  "villages": [
                    "Agacyamu",
                    "Agataba",
                    "Akabuga",
                    "Akayenzi",
                    "Gatare",
                    "Impinga",
                    "Rugarama",
                    "Ruhuha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bwiza",
                  "villages": [
                    "Akakinka",
                    "Akambogo",
                    "Gitwa",
                    "Kimanama",
                    "Mbeho",
                    "Nyakibungo",
                    "Nyaruhengeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sabusaro",
                  "villages": [
                    "Akayenzi",
                    "Gikore",
                    "Muhororo",
                    "Nyamure",
                    "Nyarunazi",
                    "Ruhangaye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Umunini",
                  "villages": [
                    "Agatare",
                    "Akabagari",
                    "Gisororo",
                    "Kaburanjwiri",
                    "Kaduha",
                    "Kamugani",
                    "Kigarama",
                    "Nyange"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kibirizi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Duwani",
                  "villages": [
                    "Buhoro",
                    "Burashi",
                    "Cyahafi",
                    "Duwani",
                    "Karambo",
                    "Kinteko",
                    "Kivumu",
                    "Mubuga",
                    "Murambi",
                    "Rwuya",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibirizi",
                  "villages": [
                    "Burashi",
                    "Gasagara",
                    "Kabakobwa",
                    "Kigarama",
                    "Mareba",
                    "Mbeho",
                    "Ruhuha",
                    "Shenyeri",
                    "Torero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muyira",
                  "villages": [
                    "Agahumiro",
                    "Agasharu",
                    "Akagarama",
                    "Akayohani",
                    "Akirasaniro",
                    "Impinga",
                    "Nyagasozi",
                    "Nyagisasa",
                    "Rwinzuki",
                    "Itaba",
                    "Zihare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruturo",
                  "villages": [
                    "Agatongati",
                    "Akabuhuzu",
                    "Akamuzenga",
                    "Akarugaju",
                    "Impinga",
                    "Kabagoti",
                    "Karengera",
                    "Kigarama",
                    "Ntobo",
                    "Nyabununi",
                    "Rubazi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kigembe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Agahabwa",
                  "villages": [
                    "Agahehe",
                    "Kabacuzi",
                    "Kamutozo",
                    "Kamweko",
                    "Nyamabuye",
                    "Ruhuha",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatovu",
                  "villages": [
                    "Agasharu",
                    "Agatare",
                    "Akamana",
                    "Gitozo",
                    "Janja",
                    "Kigarama",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Impinga",
                  "villages": [
                    "Akadogo",
                    "Akakijugujugu",
                    "Ikidashya",
                    "Icyijana",
                    "Nyamirama",
                    "Rugeragere"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabikenke",
                  "villages": [
                    "Akabahizi",
                    "Akimbaka",
                    "Impinga",
                    "Rutare",
                    "Rutaza",
                    "Shyombo",
                    "Umurangara",
                    "Ruyenzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubona",
                  "villages": [
                    "Akadogo",
                    "Kashyaga",
                    "Gaharanyonga",
                    "Gatongati",
                    "Murehe",
                    "Nyakabuye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusagara",
                  "villages": [
                    "Agasharu",
                    "Akajwiga",
                    "Akatera",
                    "Kigarama",
                    "Nyarukurazo",
                    "Nyarunyinya"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mamba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gakoma",
                  "villages": [
                    "Gakomeye",
                    "Gatare",
                    "Kinamba",
                    "Kivomo",
                    "Kizenga",
                    "Rebero",
                    "Rugenge",
                    "Rugwiza",
                    "Ruhuha",
                    "Sokofi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabumbwe",
                  "villages": [
                    "Buye",
                    "Gahararo",
                    "Kabuga",
                    "Kirwa",
                    "Muhabura",
                    "Munopfu",
                    "Nunga",
                    "Nyarugenge"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mamba",
                  "villages": [
                    "Buhima",
                    "Gakoma",
                    "Gatovu",
                    "Kamudogo",
                    "Karama",
                    "Kirase",
                    "Mashenyi",
                    "Nyarugenge",
                    "Rugunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muyaga",
                  "villages": [
                    "Butezi",
                    "Cadi",
                    "Cyarwa",
                    "Kabeza",
                    "Kibumba",
                    "Mutori",
                    "Nyamirama",
                    "Ruhamagariro",
                    "Shyembe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ramba",
                  "villages": [
                    "Gatare",
                    "Gatoke",
                    "Kayenzi",
                    "Kigangazi",
                    "Murama",
                    "Murambi",
                    "Nyiramageni",
                    "Runazi",
                    "Rurama",
                    "Rusave",
                    "Rwimvubu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muganza",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyumba",
                  "villages": [
                    "Byiza",
                    "Cyumba",
                    "Gitwa",
                    "Kabacuzi",
                    "Kamabango",
                    "Musatsi",
                    "Mutorerwa",
                    "Nyagatovu",
                    "Nyiraburiba",
                    "Rugantete",
                    "Rutare",
                    "Rwimisambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muganza",
                  "villages": [
                    "Agasharu",
                    "Agatongati",
                    "Amajuri",
                    "Cyanamo",
                    "Gitisi",
                    "Rwamugoyi",
                    "Rwinkuba",
                    "Ubusenyi",
                    "Urusaro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Remera",
                  "villages": [
                    "Agakurwe",
                    "Agaseke",
                    "Akarambo",
                    "Butare",
                    "Akajyanama",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwamiko",
                  "villages": [
                    "Agasharu",
                    "Agatovu",
                    "Akarubumba",
                    "Akimirama",
                    "Ubuseruka",
                    "Gako",
                    "Impinga",
                    "Kabahongo",
                    "Kiberengeri",
                    "Kidaturwa",
                    "Kigina",
                    "Kiyogoro",
                    "Mbehe",
                    "Nyagatovu",
                    "Nyamagana",
                    "Ryarumenangiga",
                    "Umunazi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Saga",
                  "villages": [
                    "Akabacuzi",
                    "Bucaya",
                    "Buhiza",
                    "Duwane",
                    "Impinga",
                    "Isangano",
                    "Kanto I",
                    "Kanto II",
                    "Nyabigugu",
                    "Nyagafumberi",
                    "Nyakagezi",
                    "Nyamiheto I",
                    "Nyamiheto II",
                    "Rwinkuba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mugombwa",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Baziro",
                  "villages": [
                    "Banzankuru",
                    "Gitungwa",
                    "Nyabinyenga",
                    "Nyagatovu",
                    "Nyamirama",
                    "Nyarukeri",
                    "Nyesumo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibayi",
                  "villages": [
                    "Agakanka",
                    "Akarutsibuka",
                    "Akashyamba",
                    "Akabuga",
                    "Rinda",
                    "Rwahambi",
                    "Udukoni"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibu",
                  "villages": [
                    "Agasharu",
                    "Akabugabo",
                    "Akagashuma",
                    "Mushongi",
                    "Rurenge"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mugombwa",
                  "villages": [
                    "Agasharu",
                    "Akagarama",
                    "Akarambo",
                    "Bishya",
                    "Impinga",
                    "Migina"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mukomacara",
                  "villages": [
                    "Agakomansyo",
                    "Akanyamirama",
                    "Akarangabo",
                    "Akatare",
                    "Gitarama",
                    "Kabuye",
                    "Nyabisonga",
                    "Nyarusange",
                    "Umukungu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mukindo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gitega",
                  "villages": [
                    "Agasharu",
                    "Akazenga",
                    "Gatunda",
                    "Joma",
                    "Akabati",
                    "Magi",
                    "Nyabikoni",
                    "Nyamabuye",
                    "Rebero",
                    "Ruko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mukiza",
                  "villages": [
                    "Akagarama",
                    "Bukamba",
                    "Cyimana",
                    "Gitwa",
                    "Kigoyi",
                    "Mukiza",
                    "Nyabiryo",
                    "Nyakazana",
                    "Nyarutovu",
                    "Rusumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabisagara",
                  "villages": [
                    "Agatare",
                    "Kabuga",
                    "Akanage",
                    "Butare",
                    "Kamasiga",
                    "Makwaza",
                    "Mihigo",
                    "Mutondo",
                    "Nkurubuye",
                    "Nyabihama",
                    "Rurimbi",
                    "Rususa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Runyinya",
                  "villages": [
                    "Agakomeye",
                    "Agasharu",
                    "Akakarinda",
                    "Akamaranga",
                    "Akarugina",
                    "Akayenzi",
                    "Cyumusave",
                    "Impinga",
                    "Itaba",
                    "Mpungwe",
                    "Munyegera",
                    "Nyiranguri"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Musha",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bukinanyana",
                  "villages": [
                    "Agatega",
                    "Akagarama",
                    "Bukinanyana",
                    "Gihinga",
                    "Karishyira",
                    "Kigoma",
                    "Mugejuru",
                    "Munyegera",
                    "Rugarama",
                    "Rukoni",
                    "Rwabuhanga",
                    "Rwatano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatovu",
                  "villages": [
                    "Cyayi",
                    "Gaseke",
                    "Gasura",
                    "Gitega",
                    "Kagunda",
                    "Kigarama",
                    "Mutarama",
                    "Nyabitare",
                    "Nyagasambu",
                    "Ryamugunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigarama",
                  "villages": [
                    "Bugagiro",
                    "Buremera",
                    "Kabusenda",
                    "Kagunga",
                    "Karugumya",
                    "Kigarama",
                    "Murama",
                    "Nyesonga",
                    "Rugara",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kimana",
                  "villages": [
                    "Akabanga",
                    "Kamabuye",
                    "Kamutabazi",
                    "Kibirizi",
                    "Murambi",
                    "Nyabiduha",
                    "Nyamiyaga",
                    "Ramba",
                    "Rurama",
                    "Rusenyi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ndora",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bweya",
                  "villages": [
                    "Akiminazi",
                    "Gatobotobo",
                    "Kamahembe",
                    "Kantabana",
                    "Mirayi",
                    "Sabudari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyamukuza",
                  "villages": [
                    "Giseke",
                    "Nyaburondwe",
                    "Nyarubari",
                    "Ryabiyaga",
                    "Sagahungu",
                    "Urusenyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Dahwe",
                  "villages": [
                    "Agasharu",
                    "Gahondo",
                    "Gitwa",
                    "Kigarama",
                    "Ndatemwa",
                    "Twarubona"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisagara",
                  "villages": [
                    "Gisagara",
                    "Kabuga",
                    "Kabuye",
                    "Ndora",
                    "Nyabitare",
                    "Nyamigango",
                    "Nyarunazi",
                    "Rugara",
                    "Rutonde"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mukande",
                  "villages": [
                    "Bugarama",
                    "Kidwange",
                    "Nkinda I",
                    "Nkinda II",
                    "Nyarunyinya",
                    "Nyarusange"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyanza",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Higiro",
                  "villages": [
                    "Agatare",
                    "Kabakene",
                    "Akagarama",
                    "Amashya",
                    "Impinga II",
                    "Rama",
                    "Ruvugizo",
                    "Uruvumvuti"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamugari",
                  "villages": [
                    "Akayange",
                    "Cyumba",
                    "Gatarinzira",
                    "Kigali",
                    "Rwamiko",
                    "Sare",
                    "Urugogwe",
                    "Urutoyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyaruteja",
                  "villages": [
                    "Agahehe",
                    "Akamerwe",
                    "Akasemabondi",
                    "Marambya",
                    "Gisunzu",
                    "Impinga I",
                    "Intuntu",
                    "Rugayantete",
                    "Rugomero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Umubanga",
                  "villages": [
                    "Akamabuye",
                    "Akarwishyura",
                    "Akinyana",
                    "Maheresho",
                    "Manyoni",
                    "Remera",
                    "Tundiro",
                    "Urukeri"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Save",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatoki",
                  "villages": [
                    "Gasambu",
                    "Gashubi",
                    "Kampuro",
                    "Kaneke",
                    "Kavumu",
                    "Nyarigina",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munazi",
                  "villages": [
                    "Kadurumba",
                    "Gakombe",
                    "Gitwa",
                    "Kabitoki",
                    "Kigwa",
                    "Nyarure",
                    "Rwoserezo",
                    "Zihare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwanza",
                  "villages": [
                    "Akarambo",
                    "Bazenga",
                    "Bitabire",
                    "Bwinyambo",
                    "Cyezuburo",
                    "Gahora",
                    "Kamudahunga",
                    "Kigarama",
                    "Kivumu",
                    "Nyabitare",
                    "Nyagacyamu",
                    "Ryamaguri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shyanda",
                  "villages": [
                    "Gahora",
                    "Kagende",
                    "Kirehe",
                    "Kirira",
                    "Mpinga",
                    "Mukoni",
                    "Rugori",
                    "Ryakabuye",
                    "Ryamutabazi",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Zivu",
                  "villages": [
                    "Kinyonzwe",
                    "Musekera",
                    "Nyagasozi",
                    "Rugogwe",
                    "Rwanzana",
                    "Ryamurongo",
                    "Ryarubayi"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Huye",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Gishamvu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Nyakibanda",
                  "villages": ["Byimana", "Kamabuye", "Karambo", "Kigarama"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyumba",
                  "villages": [
                    "Akagahaya",
                    "Busoro",
                    "Gasyankingi",
                    "Gishamvu",
                    "Mirambi",
                    "Nyagatama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ryakibogo",
                  "villages": [
                    "Gakombe",
                    "Gasekebuye",
                    "Gitwa",
                    "Impinga",
                    "Kadahokwa",
                    "Kidahire",
                    "Kiduha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shori",
                  "villages": [
                    "Akabere",
                    "Cyambwe",
                    "Kabeza",
                    "Karubare",
                    "Kinyovi",
                    "Rebero",
                    "Rusasa",
                    "Umunyinya"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Huye",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Muyogoro",
                  "villages": [
                    "Agacyamu",
                    "Agasharu",
                    "Akagarama",
                    "Akaruzi",
                    "Kigarama",
                    "Munini",
                    "Nkamatira",
                    "Nyarutovu",
                    "Nyarwumba",
                    "Rugerero",
                    "Rwankoni",
                    "Rwaza",
                    "Shuni"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakagezi",
                  "villages": [
                    "Gatongati",
                    "Kamutima",
                    "Karuhinda",
                    "Kigarama",
                    "Kinyana",
                    "Kinyinya",
                    "Mbuba",
                    "Munanira",
                    "Nyarunazi",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukira",
                  "villages": [
                    "Agacyamu",
                    "Agahenerezo",
                    "Agakombe",
                    "Agasharu",
                    "Gitwa",
                    "Kanazi",
                    "Kaseramba",
                    "Kubutare",
                    "Magonde",
                    "Nyagasambu",
                    "Nyanza",
                    "Rugarama",
                    "Sabaderi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sovu",
                  "villages": [
                    "Gako",
                    "Gasongati",
                    "Gikombe",
                    "Kabagendera",
                    "Karambo",
                    "Karuhayi",
                    "Kigarama",
                    "Ngobagoba",
                    "Rwezamenyo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Karama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buhoro",
                  "villages": [
                    "Kibingo",
                    "Mataba",
                    "Mitsinda",
                    "Nyamapfunda",
                    "Nyamikaba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bunazi",
                  "villages": [
                    "Agatenderi",
                    "Akarehe",
                    "Ikigarama",
                    "Kinani",
                    "Rwezamenyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gahororo",
                  "villages": [
                    "Akarambo",
                    "Mavumba",
                    "Mukongoro",
                    "Nyarusange",
                    "Sangano",
                    "Umuyange",
                    "Uwarugondo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibingo",
                  "villages": [
                    "Agasharu",
                    "Agatovu",
                    "Mukimba",
                    "Nkoto",
                    "Nyesonga",
                    "Zaga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhembe",
                  "villages": [
                    "Butare",
                    "Cyetete",
                    "Kaburemera",
                    "Rugege",
                    "Uwimpundu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kigoma",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gishihe",
                  "villages": [
                    "Birambo",
                    "Gihanda",
                    "Gishihe",
                    "Kababaji",
                    "Kabingo",
                    "Kamyuga",
                    "Karambi",
                    "Kavumu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabatwa",
                  "villages": [
                    "Bande",
                    "Buremera",
                    "Kamihuro",
                    "Karuhimbana",
                    "Kinyata",
                    "Mahwa",
                    "Mbogo",
                    "Sekera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Kabingo",
                    "Kagina",
                    "Kanyamugira",
                    "Nyarunazi",
                    "Ruhungu",
                    "Rwabuye",
                    "Sanzu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambi",
                  "villages": [
                    "Gasura",
                    "Gituntu",
                    "Gitwa",
                    "Kagarama",
                    "Kigarama",
                    "Nyarunyinya",
                    "Rebo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musebeya",
                  "villages": [
                    "Gatovu",
                    "Kabacuzi",
                    "Kabakobwa",
                    "Nyagasozi",
                    "Nyarurembo",
                    "Rusenyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabisindu",
                  "villages": [
                    "Kabugabo",
                    "Kabumba",
                    "Karambi",
                    "Mubuga",
                    "Nkenke",
                    "Nyanzamura",
                    "Rugarama",
                    "Shaba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugarama",
                  "villages": [
                    "Birembo",
                    "Birinjo",
                    "Gasharu",
                    "Kabumba",
                    "Kakarusho",
                    "Kanyurapfundo",
                    "Nyagahinga",
                    "Ruhinga",
                    "Ryaruhimbya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shanga",
                  "villages": [
                    "Gasharu",
                    "Akaderege",
                    "Gaseke",
                    "Kabicuki",
                    "Ntuntu",
                    "Nyamirama",
                    "Serugenzi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kinazi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Byinza",
                  "villages": ["Buremera", "Gakoni", "Nyarurama", "Rwerinka"]
                },
                {
                  "type": "CELLS",
                  "name": "Gahana",
                  "villages": [
                    "Cyegera",
                    "Gasaka",
                    "Gihana",
                    "Rugarama",
                    "Sogwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitovu",
                  "villages": [
                    "Hanika",
                    "Karambo",
                    "Kinazi",
                    "Muti",
                    "Nyarugunga",
                    "Nyarusange",
                    "Rubona",
                    "Ruvugizo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabona",
                  "villages": [
                    "Kibiraro",
                    "Mujyejuru",
                    "Munyu",
                    "Remera",
                    "Rwambariro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sazange",
                  "villages": [
                    "Butare",
                    "Gahondo",
                    "Giseke",
                    "Kigarama",
                    "Mukuzanyana",
                    "Nyabisindu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Maraba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buremera",
                  "villages": ["Buremera", "Gasarabuye", "Kinazi", "Nkorwe"]
                },
                {
                  "type": "CELLS",
                  "name": "Gasumba",
                  "villages": ["Gitabure", "Gitwa", "Kinombe", "Taba"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuye",
                  "villages": [
                    "Gasharu",
                    "Murama",
                    "Nyamvumba",
                    "Nyarusange",
                    "Rukeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanyinya",
                  "villages": ["Bwegera", "Gikomero", "Kabirombe", "Kayeye"]
                },
                {
                  "type": "CELLS",
                  "name": "Shanga",
                  "villages": [
                    "Gasororo",
                    "Gatyazo",
                    "Kabirizi",
                    "Mpinga",
                    "Nyamiyaga",
                    "Nyantende",
                    "Rutontwe",
                    "Shyinga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shyembe",
                  "villages": [
                    "Gisagara",
                    "Kagoma",
                    "Karambi",
                    "Karambo",
                    "Kigarama",
                    "Kizi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mbazi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatobotobo",
                  "villages": [
                    "Agasharu",
                    "Akanyinya",
                    "Bigangara",
                    "Kanyaruhinda",
                    "Mpinga",
                    "Rubona",
                    "Rwabuye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Gakombe",
                    "Gasharu",
                    "Gicubuka",
                    "Mpinga",
                    "Ndobogo",
                    "Rwezamenyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mutunda",
                  "villages": [
                    "Kagera",
                    "Kigusa",
                    "Kimuna",
                    "Kinyana",
                    "Rugarama",
                    "Ruryango"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwulire",
                  "villages": [
                    "Bumbogo",
                    "Cyayove",
                    "Gitwa",
                    "Kaburuba",
                    "Murambi",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugango",
                  "villages": [
                    "Gahanga",
                    "Kabakono",
                    "Kamunyinya",
                    "Kanzeyi",
                    "Kibiraro",
                    "Kigarama",
                    "Mpinga",
                    "Ngeri",
                    "Nyabisindu",
                    "Nyamirundi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusagara",
                  "villages": [
                    "Buhoro",
                    "Gitwa",
                    "Kibirizi",
                    "Cyingoma",
                    "Ruhuha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Tare",
                  "villages": [
                    "Cyahafi",
                    "Gashikiri",
                    "Kagarama",
                    "Kavumu",
                    "Kigwene",
                    "Rupango"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mukura",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bukomeye",
                  "villages": [
                    "Bweramana",
                    "Cyiri",
                    "Gahanga",
                    "Gasunzwe",
                    "Kigarama",
                    "Kizenga",
                    "Nyagakingi",
                    "Sata",
                    "Shingangabo",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Buvumu",
                  "villages": [
                    "Akagarama",
                    "Akayenzi",
                    "Akogo",
                    "Amasanganzira",
                    "Kabeza",
                    "Akabutora",
                    "Mpinga",
                    "Nyagasambu",
                    "Remera",
                    "Rujumbura",
                    "Rusenyi",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Icyeru",
                  "villages": [
                    "Akabuga",
                    "Akamahinda",
                    "Gakombe",
                    "Nyagisenyi",
                    "Nyarusambu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rango A",
                  "villages": [
                    "Agakera",
                    "Agakombe",
                    "Gaseke",
                    "Kabahora",
                    "Mpaza",
                    "Nyamata",
                    "Rwinuma"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ngoma",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Butare",
                  "villages": [
                    "Akabuye",
                    "Bukinanyana",
                    "Buye",
                    "Gasoro",
                    "Kabutare",
                    "Karubanda",
                    "Mamba",
                    "Busenyi",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kaburemera",
                  "villages": [
                    "Gatoki",
                    "Kaguhu",
                    "Karambi",
                    "Nyabubare",
                    "Nyagapfizi",
                    "Rugarama",
                    "Runga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Matyazo",
                  "villages": [
                    "Gafurwe",
                    "Kabeza",
                    "Kamucuzi",
                    "Nyabitare",
                    "Rurenda",
                    "Rusisiro",
                    "Ruvuzo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngoma",
                  "villages": [
                    "Ngoma V",
                    "Ngoma I",
                    "Ngoma III",
                    "Ngoma IV",
                    "Ngoma VI",
                    "Ngoma II"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ruhashya",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Busheshi",
                  "villages": [
                    "Kamuhoza",
                    "Kibyagira",
                    "Nyabijyo",
                    "Nyagatovu",
                    "Umuyange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatovu",
                  "villages": [
                    "Dutare",
                    "Karambo",
                    "Kigoma",
                    "Kiyanza",
                    "Murama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karama",
                  "villages": [
                    "Gakoni",
                    "Kampogo",
                    "Nyakigezi",
                    "Rukubiro",
                    "Umuyinza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mara",
                  "villages": [
                    "Bwankusi",
                    "Gashikiri",
                    "Gitwa",
                    "Karambo",
                    "Rwamara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhororo",
                  "villages": [
                    "Agasharu",
                    "Kinziramuhindo",
                    "Nyakabingo",
                    "Shyara",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugogwe",
                  "villages": ["Agasharu", "Akanyana", "Umurambi"]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhashya",
                  "villages": [
                    "Igerero",
                    "Kigarama",
                    "Mbagabaga",
                    "Muginga",
                    "Rugarama",
                    "Rwamabare"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rusatira",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buhimba",
                  "villages": [
                    "Gasaka",
                    "Agasharu",
                    "Impinga",
                    "Kanyirankuba",
                    "Karubona",
                    "Kinkanga",
                    "Mucunda",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gafumba",
                  "villages": [
                    "Kabuga",
                    "Kigarama",
                    "Kigari",
                    "Mubuga",
                    "Ruvugizo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kimirehe",
                  "villages": [
                    "Gakomeye",
                    "Kagasa",
                    "Kavumu",
                    "Kigarama",
                    "Ndyome",
                    "Nyakabuye",
                    "Nyarutovu",
                    "Rubanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kimuna",
                  "villages": [
                    "Kamabuye",
                    "Kimigo",
                    "Murambi",
                    "Nyabusunzu",
                    "Rushikiri",
                    "Rwamuganda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiruhura",
                  "villages": [
                    "Agasharu",
                    "Impinga",
                    "Nyagasozi",
                    "Nyamuko",
                    "Nyarucyamu",
                    "Nyarugenge",
                    "Rubona",
                    "Rugarama",
                    "Tumba",
                    "Umuremera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mugogwe",
                  "villages": [
                    "Gicubuka",
                    "Kabeza",
                    "Kibiraro",
                    "Mubuga",
                    "Murambi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rwaniro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatwaro",
                  "villages": ["Amarongi", "Gatwaro", "Nyakabuye", "Rumana"]
                },
                {
                  "type": "CELLS",
                  "name": "Kamwambi",
                  "villages": [
                    "Gakomeye",
                    "Kamwambi",
                    "Karambo",
                    "Remera",
                    "Rurembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibiraro",
                  "villages": [
                    "Murehe",
                    "Nyabisindu",
                    "Nyamivumu",
                    "Nyarunyinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwendo",
                  "villages": ["Birambo", "Cyarera", "Murango", "Rugerero"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamabuye",
                  "villages": [
                    "Bweramana",
                    "Kigarama",
                    "Munanira",
                    "Nyagacyamu",
                    "Nyamabuye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyaruhombo",
                  "villages": [
                    "Gasharu",
                    "Kibara",
                    "Kigarama",
                    "Murambi",
                    "Mwezi",
                    "Nyabujengwe",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shyunga",
                  "villages": [
                    "Karama",
                    "Karugumya",
                    "Kiboga",
                    "Kigarama",
                    "Rugarama"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Simbi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyendajuru",
                  "villages": [
                    "Bisambu",
                    "Cyendajuru",
                    "Kigarama",
                    "Matyazo",
                    "Rugarama",
                    "Ruhinga",
                    "Rwatsi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisakura",
                  "villages": [
                    "Bambiro",
                    "Gasharu",
                    "Kigarama",
                    "Kirarambogo",
                    "Nyabisindu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabusanza",
                  "villages": [
                    "Bwiza",
                    "Gihinga",
                    "Kigarama",
                    "Maliza",
                    "Muranda",
                    "Ndago",
                    "Ntobwe",
                    "Rusuma",
                    "Umurera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mugobore",
                  "villages": [
                    "Kigarama",
                    "Mugobore",
                    "Nyagasozi",
                    "Nyamirama",
                    "Nyamiyaga",
                    "Nyarurembo",
                    "Rugarama",
                    "Ryasebiganza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyangazi",
                  "villages": [
                    "Igonde",
                    "Kabakobwa",
                    "Kanyiramana",
                    "Karebero",
                    "Kinyambo",
                    "Ngororero",
                    "Nyarukurazo",
                    "Remera",
                    "Shunga",
                    "Umuyange"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Tumba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyarwa",
                  "villages": [
                    "Agahora",
                    "Agasengasenge",
                    "Agasharu",
                    "Agateme",
                    "Icyiri",
                    "Kabeza",
                    "Kigarama",
                    "Mukoni",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyimana",
                  "villages": [
                    "Abizerwa",
                    "Akamuhoza",
                    "Amahoro",
                    "Ubumwe",
                    "Ubwiyunge"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitwa",
                  "villages": [
                    "Gasenyi",
                    "Berwa",
                    "Nyarurembo",
                    "Rebero",
                    "Rimba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mpare",
                  "villages": [
                    "Agasharu",
                    "Akabuga",
                    "Akarugiranka",
                    "Kigarama",
                    "Musange",
                    "Runyinya",
                    "Rwanyanza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rango B",
                  "villages": [
                    "Akabeza",
                    "Akakanyamanza",
                    "Byimana",
                    "Impuhwe",
                    "Kigarama",
                    "Ntangarugero",
                    "Urugwiro"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Kamonyi",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Gacurabwenge",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gihinga",
                  "villages": [
                    "Kagarama",
                    "Kambyeyi",
                    "Karama",
                    "Nyagasozi",
                    "Nyarunyinya",
                    "Ryabitana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gihira",
                  "villages": [
                    "Bugaba",
                    "Kibanza",
                    "Kidaturwa",
                    "Migina",
                    "Nyabitare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigembe",
                  "villages": [
                    "Buhoro",
                    "Kabatsi",
                    "Kagarama",
                    "Mushimba",
                    "Nyakabungo",
                    "Rugobagoba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkingo",
                  "villages": [
                    "Juru",
                    "Kamonyi",
                    "Mataba",
                    "Nyamiryango",
                    "Nyamugari",
                    "Rubona"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Karama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bitare",
                  "villages": [
                    "Gisanze",
                    "Kabuga",
                    "Kajevuba",
                    "Kinkeri",
                    "Kokobe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bunyonga",
                  "villages": [
                    "Bunyonga",
                    "Nyarurembo",
                    "Nyenyeri",
                    "Ryagashaza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muganza",
                  "villages": [
                    "Bitagata",
                    "Gatare",
                    "Ngoma",
                    "Nyamitanga",
                    "Nyaruteja"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamirembe",
                  "villages": [
                    "Gaji",
                    "Gasharu",
                    "Kavumu",
                    "Kigabiro",
                    "Nyakizu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kayenzi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bugarama",
                  "villages": ["Buhurura", "Munyegera", "Nyarurama", "Remera"]
                },
                {
                  "type": "CELLS",
                  "name": "Cubi",
                  "villages": [
                    "Gitwa",
                    "Kamabuye",
                    "Ntwari",
                    "Nyakigezi",
                    "Rwishywa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kayonza",
                  "villages": ["Kigwene", "Muza", "Nyabubare"]
                },
                {
                  "type": "CELLS",
                  "name": "Kirwa",
                  "villages": [
                    "Gasamba",
                    "Gisizi",
                    "Gitwa",
                    "Kigunga",
                    "Ruheka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mataba",
                  "villages": [
                    "Gasasa",
                    "Gikurubuye",
                    "Kabana",
                    "Nyarubaya",
                    "Rugoma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamirama",
                  "villages": ["Bushara", "Kibuye", "Rugaragara"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kayumbu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Busoro",
                  "villages": ["Buramba", "Manyana", "Nyabuhoro", "Nyarugenge"]
                },
                {
                  "type": "CELLS",
                  "name": "Gaseke",
                  "villages": ["Gasiza", "Kigarama", "Nyarunyinya"]
                },
                {
                  "type": "CELLS",
                  "name": "Giko",
                  "villages": ["Gasharu", "Mirehe", "Nyarusange", "Ryamanywa"]
                },
                {
                  "type": "CELLS",
                  "name": "Muyange",
                  "villages": ["Kaje", "Kangenzi", "Murambi", "Nyarurembo"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mugina",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Jenda",
                  "villages": [
                    "Kigarama",
                    "Kiyonza",
                    "Mataba Nord",
                    "Munini",
                    "Nyamurenga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabugondo",
                  "villages": ["Bihenga", "Cyeru", "Mataba Sud", "Runzenzi"]
                },
                {
                  "type": "CELLS",
                  "name": "Mbati",
                  "villages": [
                    "Kansoro",
                    "Kigorora",
                    "Mbati",
                    "Mikamba",
                    "Murambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mugina",
                  "villages": ["Kagasa", "Kireka", "Mparo", "Mugina"]
                },
                {
                  "type": "CELLS",
                  "name": "Nteko",
                  "villages": [
                    "Gishari",
                    "Kona",
                    "Ntasi",
                    "Nyagisozi",
                    "Rusoro"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Musambira",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buhoro",
                  "villages": ["Busasamana", "Gihembe", "Gihogwe", "Reramacu"]
                },
                {
                  "type": "CELLS",
                  "name": "Cyambwe",
                  "villages": [
                    "Bimomwe",
                    "Gacaca",
                    "Giheta",
                    "Rugarama",
                    "Ruvumura",
                    "Shaka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karengera",
                  "villages": [
                    "Kamayanja",
                    "Mbari",
                    "Nyarusange",
                    "Nyarutovu",
                    "Rubanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kivumu",
                  "villages": [
                    "Gahondo",
                    "Gitega",
                    "Munazi",
                    "Nyagisozi",
                    "Nyerenga",
                    "Wimana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mpushi",
                  "villages": [
                    "Gitwiko",
                    "Kabere",
                    "Kamashashi",
                    "Kingoma",
                    "Nyarubuye",
                    "Nyarurama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukambura",
                  "villages": ["Bitsibo", "Ngoma", "Nkomane", "Nyamirembe"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ngamba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Cyimigenge",
                    "Fukwe",
                    "Musenyi",
                    "Nyagasozi",
                    "Nyamugari",
                    "Raro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kazirabonde",
                  "villages": [
                    "Bigobe",
                    "Gatare",
                    "Gatwa",
                    "Kabande",
                    "Kajevuba",
                    "Munoga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Marembo",
                  "villages": [
                    "Gahinga",
                    "Kabagogo",
                    "Kigina",
                    "Nyabitare",
                    "Rugarama"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyamiyaga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bibungo",
                  "villages": [
                    "Byenene",
                    "Karubanda",
                    "Murambi",
                    "Nkimbiri",
                    "Nyamabere",
                    "Nyamurasa",
                    "Nyamweru",
                    "Rwabinagu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabashumba",
                  "villages": [
                    "Bumbogo",
                    "Buye",
                    "Gacumu",
                    "Kigabiro",
                    "Mukuyo",
                    "Murehe",
                    "Nkoto",
                    "Ruvugizo",
                    "Ruyumba",
                    "Umugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kidahwe",
                  "villages": [
                    "Kiranzi",
                    "Kirehe",
                    "Magu",
                    "Nyamiyaga",
                    "Nyarubuye",
                    "Rugarama",
                    "Rugwiro",
                    "Rwezamenyo",
                    "Sabununga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mukinga",
                  "villages": [
                    "Birembo",
                    "Kabeza",
                    "Kayenzi",
                    "Mbayaya",
                    "Nyabubare",
                    "Nyamahuru",
                    "Nyarugenge",
                    "Nyaruhengeri",
                    "Wimana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngoma",
                  "villages": [
                    "Buhoro",
                    "Gitega",
                    "Kabahazi",
                    "Kamabuye",
                    "Kinanira",
                    "Kivugiza",
                    "Munyinya",
                    "Rwankeke"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyarubaka",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gitare",
                  "villages": [
                    "Karora",
                    "Kibingo",
                    "Mugereke",
                    "Nyabitare",
                    "Remera",
                    "Rwigerero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kambyeyi",
                  "villages": [
                    "Kabungo",
                    "Kigwene",
                    "Kirwa",
                    "Nyagihamba",
                    "Ruhuha",
                    "Ruseke"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigusa",
                  "villages": [
                    "Birembo",
                    "Gaserege",
                    "Kigarama",
                    "Kintama",
                    "Rugarama",
                    "Rwinanka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagishubi",
                  "villages": ["Kabere", "Ngendo", "Nombe", "Nyagasozi", "Tare"]
                },
                {
                  "type": "CELLS",
                  "name": "Ruyanza",
                  "villages": [
                    "Buhunga",
                    "Gatagara",
                    "Gitega",
                    "Kanombe",
                    "Kavumu",
                    "Ngarama"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rugarika",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bihembe",
                  "villages": [
                    "Gitwa",
                    "Kadasaya",
                    "Karama",
                    "Rubona",
                    "Rutovu",
                    "Rwabayanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigese",
                  "villages": [
                    "Bikamba",
                    "Kigese",
                    "Kirega",
                    "Mibirizi",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Masaka",
                  "villages": [
                    "Masaka",
                    "Mpungwe",
                    "Ruramba",
                    "Rwimondo",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarubuye",
                  "villages": [
                    "Kabarama",
                    "Musave",
                    "Nzagwa",
                    "Remera",
                    "Ruhogo",
                    "Samuduha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sheli",
                  "villages": [
                    "Sheli",
                    "Gatovu",
                    "Kagangayire",
                    "Karehe",
                    "Kigarama",
                    "Ntebe"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rukoma",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bugoba",
                  "villages": [
                    "Bugoba",
                    "Gatare",
                    "Kabuga",
                    "Nyarurama",
                    "Nyenge"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Buguri",
                  "villages": [
                    "Buguri",
                    "Nyabuvomo",
                    "Nyagasozi",
                    "Nyakabande",
                    "Ruzege",
                    "Tunza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gishyeshye",
                  "villages": [
                    "Gahungeri",
                    "Gishyeshye",
                    "Murambi",
                    "Nyamabuye",
                    "Rubare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murehe",
                  "villages": [
                    "Kabagabo",
                    "Kamuzi",
                    "Mubuga",
                    "Rushikiri",
                    "Uwingando"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwirute",
                  "villages": [
                    "Gafonogo",
                    "Mwirute",
                    "Nyarusave",
                    "Rubuye",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Remera",
                  "villages": [
                    "Gisenyi",
                    "Kabande",
                    "Kanyinya",
                    "Kigarama",
                    "Mbizi",
                    "Remera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Taba",
                  "villages": [
                    "Bukokora",
                    "Karuri",
                    "Nyarusange",
                    "Nyirabihanya",
                    "Taba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Runda",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gihara",
                  "villages": [
                    "Bikimba",
                    "Bimba",
                    "Kabasanza",
                    "Nyagatare",
                    "Rukaragata",
                    "Ruyigi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabagesera",
                  "villages": [
                    "Bwirabo",
                    "Kabagesera",
                    "Muhambara",
                    "Rubuye",
                    "Rugogwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagina",
                  "villages": [
                    "Gasharara",
                    "Kagina",
                    "Kamuhoza",
                    "Kigusa",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muganza",
                  "villages": [
                    "Kigabiro",
                    "Musebeya",
                    "Nyagacyamu",
                    "Nyaruhoko",
                    "Rubona"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruyenzi",
                  "villages": [
                    "Kibaya",
                    "Nyabitare",
                    "Nyagacaca",
                    "Rubumba",
                    "Rugazi"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Muhanga",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Cyeza",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Biringaga",
                  "villages": [
                    "Gatare",
                    "Karama",
                    "Kuwimana",
                    "Munini",
                    "Nyabisindu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigarama",
                  "villages": [
                    "Cyanika",
                    "Kajeje",
                    "Mataba",
                    "Mbirizi",
                    "Nyagatovu",
                    "Rwinkuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kivumu",
                  "villages": [
                    "Buruba",
                    "Busozi",
                    "Bwirika",
                    "Bwiza",
                    "Kamonyi",
                    "Musengo",
                    "Takwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Makera",
                  "villages": [
                    "Binunga",
                    "Kanyanza",
                    "Kigaga",
                    "Nyagatovu",
                    "Rwamugoroba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarunyinya",
                  "villages": [
                    "Bishike",
                    "Bucyeye",
                    "Buhoro",
                    "Gasovu",
                    "Gatete",
                    "Rusave"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shori",
                  "villages": [
                    "Sholi",
                    "Karehe",
                    "Kibumba",
                    "Nyarubuye",
                    "Rubimba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kabacuzi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buramba",
                  "villages": [
                    "Gahembe",
                    "Gahinga",
                    "Kabayaza",
                    "Kirambo",
                    "Musasa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Butare",
                  "villages": ["Buyoga", "Gihinga", "Karambo", "Nyirabwayi"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuye",
                  "villages": ["Kabuga", "Peru"]
                },
                {
                  "type": "CELLS",
                  "name": "Kavumu",
                  "villages": ["Gasave", "Gasiza", "Kabuga", "Rebero", "Rukoma"]
                },
                {
                  "type": "CELLS",
                  "name": "Kibyimba",
                  "villages": ["Gasharu", "Kamiranzogera", "Kanka", "Kibaya"]
                },
                {
                  "type": "CELLS",
                  "name": "Ngarama",
                  "villages": ["Kabuga", "Karambo", "Mpanga", "Nzovi"]
                },
                {
                  "type": "CELLS",
                  "name": "Ngoma",
                  "villages": [
                    "Cyambari",
                    "Gitwa",
                    "Nkegete",
                    "Nyarunyinya",
                    "Peru"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sholi",
                  "villages": [
                    "Gakondokondo",
                    "Gitwa",
                    "Jandari",
                    "Kinyoni",
                    "Mucyamo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kibangu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gisharu",
                  "villages": [
                    "Buhoro",
                    "Kirehe",
                    "Murandi",
                    "Musezero",
                    "Remera",
                    "Rwesero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitega",
                  "villages": [
                    "Cyuzu",
                    "Kaziba",
                    "Muhororo",
                    "Musambagiro",
                    "Musarara",
                    "Nkondo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Jurwe",
                  "villages": [
                    "Bukiro",
                    "Kimisange",
                    "Murambi",
                    "Nzarwa",
                    "Rubona",
                    "Ruminantege"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": [
                    "Jarama",
                    "Matoshya",
                    "Mubuga",
                    "Nyarubuye",
                    "Nyaruvumu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubyiniro",
                  "villages": [
                    "Butare",
                    "Gakurwe",
                    "Mucyamo",
                    "Mugari",
                    "Murehe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ryakanimba",
                  "villages": [
                    "Kinogi",
                    "Musekera",
                    "Mushubaguriko",
                    "Mwumba",
                    "Nyamugari"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kiyumba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Budende",
                  "villages": ["Karambi", "Muduha", "Musenyi", "Ruramba"]
                },
                {
                  "type": "CELLS",
                  "name": "Ndago",
                  "villages": ["Mataba", "Rwezamenyo", "Sovu"]
                },
                {
                  "type": "CELLS",
                  "name": "Remera",
                  "villages": [
                    "Cyakabiri",
                    "Kagahina",
                    "Kagitaba",
                    "Nyanza",
                    "Sabusaro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhina",
                  "villages": [
                    "Busumba",
                    "Gatwa",
                    "Kabimbura",
                    "Mubuga",
                    "Nundwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukeri",
                  "villages": [
                    "Busindi",
                    "Kabuga",
                    "Matovu",
                    "Munini",
                    "Musagara",
                    "Nyamirambo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muhanga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kanyinya",
                  "villages": [
                    "Gakomeye",
                    "Kanyungura",
                    "Mataba",
                    "Nyabugwiza",
                    "Nyamitanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nganzo",
                  "villages": [
                    "Gasenyi",
                    "Gitongati",
                    "Kabingo",
                    "Kagombero",
                    "Kamazu",
                    "Karama",
                    "Kumukenke",
                    "Masumo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamirama",
                  "villages": [
                    "Cyurutare",
                    "Gahabwa",
                    "Kantonganiye",
                    "Namankurwe",
                    "Nyiramarangara",
                    "Rwabagenzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Remera",
                  "villages": [
                    "Gisiza",
                    "Kiyoro",
                    "Muhanga",
                    "Munzereri",
                    "Murama",
                    "Naganiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Tyazo",
                  "villages": [
                    "Gasaka",
                    "Gitima",
                    "Kivomo",
                    "Nyahinda",
                    "Ruhuha"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mushishiro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Matyazo",
                  "villages": [
                    "Cyarubambire",
                    "Gataba",
                    "Gitwa",
                    "Kabeza",
                    "Nyagasozi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munazi",
                  "villages": ["Kabadaha", "Kabare", "Kiyoro", "Rwinkindi"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagasozi",
                  "villages": [
                    "Bandora",
                    "Gasharu",
                    "Gihara",
                    "Gisovu",
                    "Kanombe",
                    "Kibonwa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukaragata",
                  "villages": [
                    "Bitsibo",
                    "Hanika",
                    "Kamurekezi",
                    "Kivumu",
                    "Rugerero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwasare",
                  "villages": ["Bahimba", "Kanyinya", "Karucura", "Rubona"]
                },
                {
                  "type": "CELLS",
                  "name": "Rwigerero",
                  "villages": ["Nyamasheke", "Nyanza", "Rwuki", "Ryaruyange"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyabinoni",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gashorera",
                  "villages": [
                    "Munyinya",
                    "Muzamuzi",
                    "Ndaragati",
                    "Ryakiyange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Masangano",
                  "villages": ["Cyanika", "Murambi", "Ngaru"]
                },
                {
                  "type": "CELLS",
                  "name": "Mbuga",
                  "villages": [
                    "Gitaba",
                    "Karengeri",
                    "Munini",
                    "Murama",
                    "Nyarusange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muvumba",
                  "villages": ["Nyamugari", "Nyamure", "Nyanza"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarusozi",
                  "villages": [
                    "Gitwa",
                    "Kamahoro",
                    "Kanombe",
                    "Kanyamizo",
                    "Mugeni",
                    "Rusenge"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyamabuye",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gahogo",
                  "villages": [
                    "Gihuma",
                    "Kamazuru",
                    "Kamugina",
                    "Kavumu",
                    "Nyarucyamu I",
                    "Nyarucyamu II",
                    "Nyarucyamu III",
                    "Rutenga",
                    "Ruvumera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gifumba",
                  "villages": [
                    "Gifumba",
                    "Gisiza",
                    "Kirebe",
                    "Rugarama",
                    "Rutarabana",
                    "Samuduha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitarama",
                  "villages": [
                    "Gatika",
                    "Kagitarama",
                    "Kavumu",
                    "Nyabisindu",
                    "Nyarusiza",
                    "Nyarutovu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Remera",
                  "villages": [
                    "Biti",
                    "Gasenyi",
                    "Gasharu",
                    "Kinyenkanda",
                    "Kirenge",
                    "Munini",
                    "Nete",
                    "Nyakabingo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyarusange",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Mbiriri",
                  "villages": [
                    "Gasave",
                    "Gasharu",
                    "Gisasa",
                    "Karehe",
                    "Kintobo",
                    "Ntenderi",
                    "Nyarushora"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musongati",
                  "villages": [
                    "Cyiciro",
                    "Jabiro",
                    "Kagarama",
                    "Kamanga",
                    "Murambi",
                    "Ngororano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngaru",
                  "villages": ["Gitega", "Kibirizi", "Remera", "Rukamiro"]
                },
                {
                  "type": "CELLS",
                  "name": "Rusovu",
                  "villages": ["Mututu", "Rukurazo", "Rwambariro", "Vugo"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rongi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasagara",
                  "villages": [
                    "Fumbwe",
                    "Gasharu",
                    "Kidahwe",
                    "Murehe",
                    "Musenyi",
                    "Nyabugombe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasharu",
                  "villages": [
                    "Birehe",
                    "Gituza",
                    "Kabirizi",
                    "Kabuga",
                    "Karama",
                    "Nyamiyaga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambo",
                  "villages": [
                    "Gifurwe",
                    "Gitwa",
                    "Nyabikenke",
                    "Nyagasozi",
                    "Rushenyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamirambo",
                  "villages": [
                    "Gisoro",
                    "Kabakungu",
                    "Karambi",
                    "Masizi",
                    "Mugwato",
                    "Ntarabana",
                    "Rugogwe",
                    "Rwamure"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhango",
                  "villages": ["Burerabana", "Kondo", "Muyebe", "Rukoma"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rugendabari",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasave",
                  "villages": [
                    "Gakoma",
                    "Gasharu",
                    "Giturwa",
                    "Nyagasozi",
                    "Nyakibuye",
                    "Nyamatete"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanyana",
                  "villages": ["Gasovu", "Kabuba", "Muheta", "Ntonde"]
                },
                {
                  "type": "CELLS",
                  "name": "Kibaga",
                  "villages": ["Kiduha", "Mataba", "Njamena"]
                },
                {
                  "type": "CELLS",
                  "name": "Mpinga",
                  "villages": ["Buganda", "Gisiza"]
                },
                {
                  "type": "CELLS",
                  "name": "Nsanga",
                  "villages": [
                    "Mpongo",
                    "Ngando",
                    "Nyundo",
                    "Rugwiza",
                    "Twabumbogo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Shyogwe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kinini",
                  "villages": [
                    "Gatare",
                    "Kabungo",
                    "Kinyami",
                    "Musezero",
                    "Nyakabingo",
                    "Nyakaguhu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbare",
                  "villages": [
                    "Buriza",
                    "Muremberi",
                    "Nyabisindu",
                    "Rubugurizo",
                    "Rubuye",
                    "Songa",
                    "Vunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": [
                    "Gakomeye",
                    "Gasharu",
                    "Kigarama",
                    "Mapfundo",
                    "Matsinsi",
                    "Nyamaganda",
                    "Nyarucyamu",
                    "Rwamaraba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruli",
                  "villages": [
                    "Gakombe",
                    "Kabeza",
                    "Karama",
                    "Kavumu",
                    "Munyinya",
                    "Murambi",
                    "Nyagacyamu",
                    "Ruhina"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Nyamagabe",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Buruhukiro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bushigishigi",
                  "villages": [
                    "Bushigishigi",
                    "Giharayumbu",
                    "Mugote",
                    "Rusekera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Byimana",
                  "villages": [
                    "Bishyiga",
                    "Buhoro",
                    "Gakangaga",
                    "Gihumo",
                    "Rukeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gifurwe",
                  "villages": [
                    "Bitaba",
                    "Gifurwe",
                    "Nganzo",
                    "Nyamaberi",
                    "Ruronzi",
                    "Uwankiriye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kizimyamuriro",
                  "villages": [
                    "Gikungu",
                    "Gishwati",
                    "Kagano",
                    "Kinaba",
                    "Minaga",
                    "Mujerenge",
                    "Tantamara",
                    "Uwinzira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munini",
                  "villages": [
                    "Cyinyonza",
                    "Gitovu",
                    "Magumira",
                    "Matsinda",
                    "Munini",
                    "Rukwandu",
                    "Uwinzovu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rambya",
                  "villages": [
                    "Buruhukiro",
                    "Kibuburo",
                    "Mpanga",
                    "Nkamba",
                    "Ruseke"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Cyanika",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gitega",
                  "villages": [
                    "Butare",
                    "Gaseke",
                    "Gasharu",
                    "Gitega",
                    "Kigarama",
                    "Miko",
                    "Munyereri",
                    "Musasa",
                    "Rusarasi",
                    "Rwingoma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karama",
                  "villages": [
                    "Birambo",
                    "Karaba",
                    "Karama",
                    "Mugamba",
                    "Munyinya",
                    "Nyamisave",
                    "Nyanza",
                    "Rwamagana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiyumba",
                  "villages": [
                    "Gatare",
                    "Gatentwe",
                    "Gikomero",
                    "Gishike",
                    "Kagarama",
                    "Kaviri",
                    "Nyarucyamu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngoma",
                  "villages": [
                    "Kabarera",
                    "Kamuhirwa",
                    "Kavumu",
                    "Kinga",
                    "Murama",
                    "Nyamirambo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyanza",
                  "villages": [
                    "Buhiga",
                    "Kibingo",
                    "Mirama",
                    "Mugombwa",
                    "Nyabisindu",
                    "Rugaragara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyanzoga",
                  "villages": [
                    "Bigazi",
                    "Gafuhisha",
                    "Kagarama",
                    "Karuvenya",
                    "Mbeho",
                    "Mugari",
                    "Nyamirama",
                    "Rusenyi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gasaka",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kigeme",
                  "villages": ["Gakoma", "Gitaba", "Munombe", "Nyentanga"]
                },
                {
                  "type": "CELLS",
                  "name": "Ngiryi",
                  "villages": [
                    "Karambi",
                    "Kibanda",
                    "Kitazigurwa",
                    "Munyege",
                    "Ngiryi",
                    "Sumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabivumu",
                  "villages": ["Dusego", "Gasharu", "Nyabivumu", "Raro"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamugari",
                  "villages": [
                    "Kabacuzi",
                    "Kabajogo",
                    "Karama",
                    "Kigarama",
                    "Nyamugari",
                    "Nyarusange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nzega",
                  "villages": ["Gasaka", "Gitantu", "Kadoma", "Nzega"]
                },
                {
                  "type": "CELLS",
                  "name": "Remera",
                  "villages": [
                    "Gitwa",
                    "Kabeza",
                    "Murambi",
                    "Muriro",
                    "Nyamifumba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gatare",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bakopfu",
                  "villages": ["Karambo", "Karumbi", "Muhingo", "Twiya"]
                },
                {
                  "type": "CELLS",
                  "name": "Gatare",
                  "villages": [
                    "Gashasha",
                    "Kiyovu",
                    "Murembo",
                    "Rwamakara",
                    "Uwisuri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mukongoro",
                  "villages": [
                    "Gikungu",
                    "Kagano",
                    "Kageyo",
                    "Nyakabuye",
                    "Rukereko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruganda",
                  "villages": [
                    "Gasharu",
                    "Gituntu",
                    "Kamamara",
                    "Masangano",
                    "Runaba",
                    "Rwangambibi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shyeru",
                  "villages": [
                    "Baziro",
                    "Bimba",
                    "Kagusa",
                    "Ruhanga",
                    "Rushyarara"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kaduha",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kavumu",
                  "villages": [
                    "Bamba",
                    "Biziguro",
                    "Gahama",
                    "Gataba",
                    "Gitega",
                    "Joma",
                    "Kabuga",
                    "Kamonyi",
                    "Karehe",
                    "Kavumu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": [
                    "Kasemanyana",
                    "Kibiraro",
                    "Nyaruryango",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musenyi",
                  "villages": [
                    "Burengo",
                    "Gasovu",
                    "Gatoki",
                    "Kirwa",
                    "Munini",
                    "Nganzo",
                    "Nyakirambi",
                    "Ruganda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabisindu",
                  "villages": [
                    "Gitabage",
                    "Kabaziro",
                    "Kanyege",
                    "Kasemazi",
                    "Kirehe",
                    "Kivumu",
                    "Muduha",
                    "Mukongoro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamiyaga",
                  "villages": [
                    "Cyugaro",
                    "Gashiru",
                    "Nkomero",
                    "Nyakabingo",
                    "Ruhuha",
                    "Rukeri"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kamegeri",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bwama",
                  "villages": ["Gitwa", "Kamiro", "Kigarama"]
                },
                {
                  "type": "CELLS",
                  "name": "Kamegeri",
                  "villages": ["Kinyovu", "Ntaruka", "Rweru", "Sovu"]
                },
                {
                  "type": "CELLS",
                  "name": "Kirehe",
                  "villages": ["Gasharu", "Kigarama", "Ryanyirataba"]
                },
                {
                  "type": "CELLS",
                  "name": "Kizi",
                  "villages": ["Gakomeye", "Kagarama", "Kinyana"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarusiza",
                  "villages": ["Bande", "Nyarusange", "Nyarusiza", "Rutuna"]
                },
                {
                  "type": "CELLS",
                  "name": "Rususa",
                  "villages": ["Bahina", "Baro", "Kigarama", "Muhembe"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kibirizi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bugarama",
                  "villages": [
                    "Kabarera",
                    "Kamina",
                    "Karandura",
                    "Kivumu",
                    "Munazi",
                    "Nyabusozi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bugarura",
                  "villages": [
                    "Kasebuturanyi",
                    "Kirwa",
                    "Muyange",
                    "Nyakibyeyi",
                    "Uwinyana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gashiha",
                  "villages": [
                    "Gasharu",
                    "Muduha",
                    "Muganza",
                    "Nyabubare",
                    "Rukamiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambo",
                  "villages": [
                    "Gisoro",
                    "Gitwa",
                    "Kavumu",
                    "Nyamirama",
                    "Nyirakiraro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhunga",
                  "villages": [
                    "Cyamashya",
                    "Gakoma",
                    "Kabuga",
                    "Munombe",
                    "Nyagishubi",
                    "Ruhurura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Uwindekezi",
                  "villages": [
                    "Birembo",
                    "Gatovu",
                    "Karumbi",
                    "Kigarama",
                    "Mugote",
                    "Uwamataba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kibumbwe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bwenda",
                  "villages": [
                    "Munyinya",
                    "Murambi",
                    "Murwa",
                    "Nyagatovu",
                    "Nyamirama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gakanka",
                  "villages": [
                    "Cyeru",
                    "Gikomero",
                    "Munini",
                    "Nkurubuye",
                    "Nyarubuye",
                    "Rambya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibibi",
                  "villages": [
                    "Gatandaganya",
                    "Kabere",
                    "Kanyege",
                    "Kirwa",
                    "Rwezamenyo",
                    "Ryingarura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakiza",
                  "villages": [
                    "Dusenyi",
                    "Karambo",
                    "Kinyana",
                    "Murambi",
                    "Nyakizu",
                    "Zigati"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kitabi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kagano",
                  "villages": [
                    "Bususuruke",
                    "Kintobo",
                    "Turonzi",
                    "Uwabumenyi",
                    "Uwarwubatsi",
                    "Uwintyabire"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mujuga",
                  "villages": [
                    "Gahande",
                    "Gasasa",
                    "Mujuga",
                    "Mukaka",
                    "Rwufe",
                    "Uwanyakanyeri",
                    "Uwinka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mukungu",
                  "villages": [
                    "Gahira",
                    "Gatare",
                    "Karambi",
                    "Uwicurangiro",
                    "Uwurunazi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shaba",
                  "villages": [
                    "Bitaba",
                    "Gakoko",
                    "Muganza",
                    "Muyange",
                    "Uwakagoro",
                    "Uwinka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Uwingugu",
                  "villages": [
                    "Gisarenda",
                    "Kigari",
                    "Rubuye",
                    "Ruhanga",
                    "Uwimisigati",
                    "Uwurunazi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mbazi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Manwari",
                  "villages": ["Karambi", "Kibumba", "Kigarama", "Muhororo"]
                },
                {
                  "type": "CELLS",
                  "name": "Mutiwingoma",
                  "villages": [
                    "Gatwa",
                    "Kabere",
                    "Kabuga",
                    "Muduha",
                    "Nyamirama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngambi",
                  "villages": [
                    "Gaseke",
                    "Kabeza",
                    "Kivomo",
                    "Maheresho",
                    "Munanira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngara",
                  "villages": [
                    "Butare",
                    "Gasharu",
                    "Gisiza",
                    "Gituntu",
                    "Nyagishumbu",
                    "Ruseke"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mugano",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gitondorero",
                  "villages": [
                    "Gakomeye",
                    "Gitondorero",
                    "Gituntu",
                    "Karambi",
                    "Maso"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitwa",
                  "villages": [
                    "Kabuhoro",
                    "Kirenzi I",
                    "Kirenzi II",
                    "Nyakibingo",
                    "Rutabo",
                    "Ryamigabo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhinga",
                  "villages": [
                    "Cyibande",
                    "Gitarama",
                    "Kabuye",
                    "Karambi",
                    "Kinzira",
                    "Runyinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sovu",
                  "villages": [
                    "Kigarama",
                    "Nziranziza",
                    "Rugarama I",
                    "Rugarama II",
                    "Ruhanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Suti",
                  "villages": [
                    "Cyabute",
                    "Gasiza",
                    "Matyazo",
                    "Rwamiko",
                    "Turyango"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Yonde",
                  "villages": [
                    "Gisovu",
                    "Kanyegenyege",
                    "Nyarusazi",
                    "Ruhamira I",
                    "Ruhamira II"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Musange",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasave",
                  "villages": [
                    "Gasura",
                    "Kabingo",
                    "Murambi",
                    "Nyabivumu",
                    "Nyakabuye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Jenda",
                  "villages": [
                    "Cyabagomba",
                    "Kabakannyi",
                    "Kavumu",
                    "Kayogoro",
                    "Nyakibungo",
                    "Nyakirambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Masagara",
                  "villages": [
                    "Cyabasana",
                    "Cyaruvunge",
                    "Gituntu",
                    "Muhororo",
                    "Mutakara",
                    "Mutuntu",
                    "Nyagihima"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Masangano",
                  "villages": [
                    "Gasagara",
                    "Kibumba",
                    "Mubuga",
                    "Nyakabuye",
                    "Rutuntu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Masizi",
                  "villages": [
                    "Karama",
                    "Munini",
                    "Murehe",
                    "Rwankango",
                    "Rwina"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagisozi",
                  "villages": [
                    "Dusenyi",
                    "Kibaga",
                    "Remera",
                    "Ruhuga",
                    "Uwabarashi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Musebeya",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatovu",
                  "villages": [
                    "Bisereganya",
                    "Gatovu",
                    "Gitovu",
                    "Kanyiranzoga",
                    "Nyarubande",
                    "Ryanyakayaga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarurambi",
                  "villages": [
                    "Cyabwimba",
                    "Cyarwa",
                    "Gatiti",
                    "Giheta",
                    "Kabere",
                    "Mujyejuru",
                    "Nyarurambi",
                    "Rwabigeyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugano",
                  "villages": [
                    "Bugarama",
                    "Busanza",
                    "Gisiza",
                    "Kibandirwa",
                    "Rugano",
                    "Rukungu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Runege",
                  "villages": [
                    "Bigugu",
                    "Bitaba",
                    "Gacundura",
                    "Gakereko",
                    "Ndogondwe",
                    "Ruganza",
                    "Rukaranka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusekera",
                  "villages": [
                    "Karambo",
                    "Ngoma",
                    "Rebero",
                    "Shaki",
                    "Uwimituza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sekera",
                  "villages": [
                    "Masinde",
                    "Mugano",
                    "Nkomero",
                    "Nyaruhura",
                    "Rubumburi",
                    "Rugazi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mushubi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buteteri",
                  "villages": [
                    "Gorwe",
                    "Kagorwe",
                    "Kizanganya",
                    "Mugunda",
                    "Murambi",
                    "Ngoma",
                    "Nyakibande",
                    "Remera",
                    "Rusoyo",
                    "Rwamiko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyobe",
                  "villages": [
                    "Cyobe",
                    "Gaseke",
                    "Gitikirema",
                    "Nyagisumo",
                    "Nyakabingo",
                    "Nyakirambi",
                    "Nyarushike",
                    "Rutoyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gashwati",
                  "villages": [
                    "Bweramana",
                    "Gashwati",
                    "Muhembe",
                    "Muko",
                    "Mushubi",
                    "Rucunda",
                    "Ruhinga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nkomane",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bitandara",
                  "villages": [
                    "Bitandara",
                    "Buhanzi",
                    "Munanira",
                    "Muyange",
                    "Rugeyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musaraba",
                  "villages": [
                    "Gatorove",
                    "Gihunga",
                    "Kimbogo",
                    "Musaraba",
                    "Rusoyo",
                    "Rutare",
                    "Rwimpiri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mutengeri",
                  "villages": [
                    "Cyurwufe",
                    "Gihwahwa",
                    "Kavumu",
                    "Kivumu",
                    "Mutengeri",
                    "Tubuye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkomane",
                  "villages": [
                    "Banda",
                    "Kagano",
                    "Mugari",
                    "Mutarama",
                    "Ruhinga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarwungo",
                  "villages": [
                    "Bisharara",
                    "Bucyero",
                    "Marambo",
                    "Nyaruhombo",
                    "Nyarwungo",
                    "Rangi",
                    "Rutoyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Twiya",
                  "villages": [
                    "Gakomeye",
                    "Gishenge",
                    "Karukoma",
                    "Kibuga",
                    "Twiya"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Tare",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buhoro",
                  "villages": [
                    "Gisanze",
                    "Gitovu",
                    "Kanserege",
                    "Kirwa",
                    "Nyabwoma",
                    "Rwufe",
                    "Ryarubondo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasarenda",
                  "villages": [
                    "Kagarama",
                    "Kiminazi",
                    "Kivuruga",
                    "Murangara",
                    "Muse",
                    "Mwufe",
                    "Uwinkomo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatovu",
                  "villages": [
                    "Gasenge",
                    "Kigusa",
                    "Kimina",
                    "Muhati",
                    "Ruziba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kaganza",
                  "villages": [
                    "Akanyirandori",
                    "Bivumu",
                    "Buremera",
                    "Cyimicanga",
                    "Ruganza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkumbure",
                  "villages": [
                    "Biraro",
                    "Bireka",
                    "Gahembe",
                    "Kibwije",
                    "Mubezi",
                    "Muhumo",
                    "Rugeti",
                    "Rukereko",
                    "Uwumugeti",
                    "Vumwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamigina",
                  "villages": [
                    "Gakoma",
                    "Maryohe",
                    "Ngororero",
                    "Nkomero",
                    "Nyarugeti",
                    "Rukoko",
                    "Uwinyana"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Uwinkingi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bigumira",
                  "villages": ["Bigumira", "Cyumuganza", "Gakoko", "Magumira"]
                },
                {
                  "type": "CELLS",
                  "name": "Gahira",
                  "villages": [
                    "Bunyunyu",
                    "Gahira",
                    "Gititi",
                    "Kibugazi",
                    "Kunyu",
                    "Rugeyo",
                    "Uwinkingi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibyagira",
                  "villages": [
                    "Bishya",
                    "Cyumuganza",
                    "Kabuga",
                    "Kabusekuru",
                    "Kagano",
                    "Sabake",
                    "Sekera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mudasomwa",
                  "villages": [
                    "Gicaca",
                    "Karambo",
                    "Nsinduka",
                    "Rushubi",
                    "Uwanjyogoro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munyege",
                  "villages": [
                    "Bitaba",
                    "Gahango",
                    "Kanyampongo",
                    "Kimina",
                    "Munyege",
                    "Nyarurambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugogwe",
                  "villages": [
                    "Mabende",
                    "Munini",
                    "Mwishogwe",
                    "Nyamugari",
                    "Rugeti",
                    "Subukiniro"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Nyanza",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Busasamana",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gahondo",
                  "villages": [
                    "Bigega",
                    "Bugura",
                    "Kamatovu",
                    "Karama",
                    "Kavumu",
                    "Kibaga",
                    "Kiberinka",
                    "Nyakwibereka",
                    "Nyarutovu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kavumu",
                  "villages": [
                    "Akirabo",
                    "Gihisi A",
                    "Gihisi B",
                    "Karukoranya A",
                    "Karukoranya B",
                    "Majyambere",
                    "Mugandamure A",
                    "Mugandamure B",
                    "Mukoni",
                    "Nyagatovu",
                    "Nyamagana B",
                    "Rukandiro",
                    "Ruvumera",
                    "Kavumu",
                    "Nyamagana A"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibinja",
                  "villages": [
                    "Kabuzuru",
                    "Kigarama",
                    "Mukindo",
                    "Ngorongari",
                    "Rebero",
                    "Rugarama",
                    "Rugari A",
                    "Rugari B"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyanza",
                  "villages": [
                    "Bunyeshywa",
                    "Gakenyeri A",
                    "Gakenyeri B",
                    "Gatare",
                    "Gatsinsino",
                    "Gatunguru",
                    "Gishike",
                    "Kavumu",
                    "Kigarama",
                    "Kivumu",
                    "Mugonzi",
                    "Nyanza",
                    "Nyarunyinya",
                    "Rubona"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwesero",
                  "villages": [
                    "Bukinankwavu",
                    "Gahanda",
                    "Gisando",
                    "Kabona",
                    "Kidaturwa",
                    "Murambi",
                    "Mwima",
                    "Nyabisindu",
                    "Rugarama",
                    "Rukari",
                    "Rwesero",
                    "Taba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Busoro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gitovu",
                  "villages": [
                    "Gitega",
                    "Kabeza",
                    "Kayenzi",
                    "Muhindo",
                    "Musumba",
                    "Nazareti",
                    "Nyacyonga",
                    "Nyagasambu",
                    "Rushoka"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kimirama",
                  "villages": [
                    "Gitwa",
                    "Kimirama",
                    "Kireranyana",
                    "Ndamira",
                    "Nyamiyonga",
                    "Nyarugenge",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Masangano",
                  "villages": [
                    "Busoro",
                    "Bweramana",
                    "Gikombe",
                    "Masangano",
                    "Murambi",
                    "Nyarugunga",
                    "Runyonza",
                    "Shinga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munyinya",
                  "villages": [
                    "Kagarama",
                    "Karambi",
                    "Kigali",
                    "Kivugiza",
                    "Rwara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukingiro",
                  "villages": [
                    "Cyamugani",
                    "Cyuriro",
                    "Gasambu",
                    "Runazi",
                    "Rwanamiza",
                    "Rwangoga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shyira",
                  "villages": [
                    "Gahogo",
                    "Kinkanga",
                    "Nyamoyaga",
                    "Rucyamo",
                    "Rusharu",
                    "Saruduha"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Cyabakamyi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kadaho",
                  "villages": [
                    "Gahengeri",
                    "Gasenyi",
                    "Gataba",
                    "Gitega",
                    "Kabere",
                    "Kabeza",
                    "Kadaho",
                    "Nyabisazi",
                    "Nyabyiyoni"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karama",
                  "villages": [
                    "Butembo",
                    "Cyarera",
                    "Gahondo",
                    "Gatongati",
                    "Kamabuye",
                    "Kamonyi",
                    "Karama",
                    "Nyabinombe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabinyenga",
                  "villages": [
                    "Kabuga",
                    "Kandihe",
                    "Karehe",
                    "Kimiyumbu",
                    "Nyabinyenga",
                    "Rugwa",
                    "Rwamagana",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarurama",
                  "villages": [
                    "Kabyuma",
                    "Kigarama",
                    "Kirombozi",
                    "Nyakabingo",
                    "Rugote",
                    "Ruvuzo",
                    "Rwabatwa",
                    "Rwamiko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubona",
                  "villages": [
                    "Bikombe",
                    "Bugarama",
                    "Gahunga",
                    "Karambo",
                    "Kavumu",
                    "Murambi",
                    "Nyabishike",
                    "Nyaminazi",
                    "Nyarutovu",
                    "Rugendabari"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kibilizi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyeru",
                  "villages": [
                    "Gasagara",
                    "Gisika",
                    "Kamatamu",
                    "Karama",
                    "Matara",
                    "Muyebe",
                    "Nyamunini",
                    "Rutete"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbuye",
                  "villages": [
                    "Binyana",
                    "Gako",
                    "Gihama",
                    "Karambi",
                    "Karehe",
                    "Kigarama",
                    "Mukoni",
                    "Rukore"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mututu",
                  "villages": [
                    "Gatongati",
                    "Gicumbi",
                    "Kabeza",
                    "Kanyinya",
                    "Kivugiza",
                    "Masangano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwotso",
                  "villages": [
                    "Bigarama",
                    "Kabuga",
                    "Kibilizi",
                    "Mubano",
                    "Mubuga",
                    "Mutima",
                    "Nyarurama",
                    "Runyonza",
                    "Rusagara",
                    "Saruhembe"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kigoma",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Butansinda",
                  "villages": [
                    "Butatsinda",
                    "Gitare",
                    "Shusho",
                    "Karama",
                    "Karambo",
                    "Kayange",
                    "Kibaza",
                    "Kigoma",
                    "Marongi",
                    "Mataba",
                    "Nyesonga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Butara",
                  "villages": [
                    "Buruba",
                    "Butara",
                    "Gasharu",
                    "Kavumu",
                    "Kigufi",
                    "Kirundo",
                    "Nyabusheshe",
                    "Runyinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gahombo",
                  "villages": [
                    "Birembo",
                    "Cyingina",
                    "Gashikiri",
                    "Gicunshu",
                    "Gisore",
                    "Karugando",
                    "Kaziba",
                    "Kirerabana",
                    "Nyagacyamo",
                    "Rugarama",
                    "Serivise"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasoro",
                  "villages": [
                    "Bugarura",
                    "Bwambika",
                    "Gisoro",
                    "Giturwa",
                    "Kabacuzi",
                    "Kajevuba",
                    "Kinene",
                    "Mutende",
                    "Nyabubare",
                    "Nyakabungo",
                    "Runyanzige",
                    "Sholi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mulinja",
                  "villages": [
                    "Akana Ka Mulinja",
                    "Akintare",
                    "Buharankakara",
                    "Buhoro",
                    "Burambi",
                    "Karama",
                    "Kigarama",
                    "Muramba",
                    "Nyarukurazo",
                    "Sabununga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mukingo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyerezo",
                  "villages": [
                    "Birambo",
                    "Bweramana",
                    "Cyerezo",
                    "Cyikirehe",
                    "Cyumba",
                    "Gasharu",
                    "Kamabuye",
                    "Karambi",
                    "Nyarutovu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatagara",
                  "villages": [
                    "Cyahafi",
                    "Gatagara",
                    "Kamushatsi",
                    "Karama",
                    "Karuhwanya",
                    "Kinyogoto",
                    "Muhororo",
                    "Nyamiyaga",
                    "Nyamuko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiruli",
                  "villages": [
                    "Gahoko",
                    "Kaganza",
                    "Kiganda",
                    "Kigarama",
                    "Masambu",
                    "Muganza",
                    "Murehe",
                    "Muturirwa",
                    "Nkiko",
                    "Nyabishinge",
                    "Nyankunamirwa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mpanga",
                  "villages": [
                    "Birembo",
                    "Karambi",
                    "Kinyinya",
                    "Mataba",
                    "Nkinda",
                    "Nyakabuye",
                    "Nyamazi",
                    "Remera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngwa",
                  "villages": [
                    "Bikire",
                    "Biroro",
                    "Gasiza",
                    "Kagwa A",
                    "Karambi A",
                    "Karenge",
                    "Kidaturwa",
                    "Kigarama",
                    "Mwanabiri",
                    "Nyarunyinya A",
                    "Rutete"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkomero",
                  "villages": [
                    "Cyimana",
                    "Gisuma",
                    "Kabarima",
                    "Kibonde",
                    "Kigarama",
                    "Nyacyoma",
                    "Nyakabungo",
                    "Nyankokoma",
                    "Nzuki",
                    "Ruhosha"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muyira",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gati",
                  "villages": [
                    "Buhaza",
                    "Kimfizi",
                    "Kinyoni",
                    "Ruyenzi",
                    "Rwabihanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Migina",
                  "villages": [
                    "Bugina",
                    "Kalilisi",
                    "Kavumu",
                    "Kinyana",
                    "Musenyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamiyaga",
                  "villages": ["Gihama", "Kabuye", "Kiniga", "Nzovi", "Rugese"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamure",
                  "villages": [
                    "Cyegera",
                    "Gatare",
                    "Gituza",
                    "Kanyundo",
                    "Nyarugunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyundo",
                  "villages": ["Jari", "Nyundo", "Mugari", "Muyira", "Nzoga"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ntyazo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bugali",
                  "villages": [
                    "Gakindo",
                    "Gisayura",
                    "Kabusheja",
                    "Kiruhura",
                    "Marabage",
                    "Ndago",
                    "Nkomane",
                    "Nyabitare",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyotamakara",
                  "villages": [
                    "Bayi",
                    "Kankima",
                    "Karuyumbo",
                    "Misasa",
                    "Mpande",
                    "Nyabigugu",
                    "Nyarutovu",
                    "Ruyenzi",
                    "Rwimpundu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagunga",
                  "villages": [
                    "Bukinanyana",
                    "Kamabuye",
                    "Kimigunga",
                    "Ntebe",
                    "Nyakabungo",
                    "Nyamirama",
                    "Nyamirambo",
                    "Nyamizi",
                    "Nyarubuye",
                    "Rusasa",
                    "Samuduha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Katarara",
                  "villages": [
                    "Gasharu",
                    "Kagarama",
                    "Kamabuye",
                    "Muhero",
                    "Munyiginya",
                    "Muyenzi",
                    "Nkombe",
                    "Rebero",
                    "Rukoma",
                    "Rusebeya"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyagisozi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gahunga",
                  "villages": [
                    "Gatare",
                    "Gihara",
                    "Gituntu",
                    "Kagarama",
                    "Kigohe",
                    "Mweya",
                    "Nyamugari",
                    "Uwarukara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabirizi",
                  "villages": [
                    "Cyahafi",
                    "Gihimbi",
                    "Kabuye",
                    "Muhaga",
                    "Nyagatovu",
                    "Nyamabuye",
                    "Nyaruvumu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Gatoki",
                    "Mirehe",
                    "Murandaryi",
                    "Mwokora",
                    "Nyamitobo",
                    "Uwabushingwe",
                    "Uwagisozi",
                    "Uwimpura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kirambi",
                  "villages": [
                    "Busenyeye",
                    "Bweru",
                    "Gasharu",
                    "Gasiza",
                    "Jarama",
                    "Mpaza",
                    "Murende",
                    "Mwezi",
                    "Rwankuba",
                    "Rwimbazi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rurangazi",
                  "villages": [
                    "Gashyenzi",
                    "Kami",
                    "Kigarama",
                    "Musongati",
                    "Nyamagana",
                    "Nyarutovu",
                    "Nyaruvumu",
                    "Rugarama"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rwabicuma",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gacu",
                  "villages": ["Bisambu", "Gisake", "Karehe", "Nyamiyaga"]
                },
                {
                  "type": "CELLS",
                  "name": "Gishike",
                  "villages": [
                    "Gakoni",
                    "Gasiza A",
                    "Gasiza B",
                    "Karambo A",
                    "Karambo B",
                    "Karusimbi",
                    "Rwamushumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": ["Kabisine", "Kadusenyi", "Karwiru", "Nyamiseke"]
                },
                {
                  "type": "CELLS",
                  "name": "Mushirarungu",
                  "villages": [
                    "Kirwa",
                    "Nyabubare",
                    "Nyamivumu A",
                    "Nyamuvumu B"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarusange",
                  "villages": [
                    "Cyarwa",
                    "Kamushi",
                    "Kamuvunyi A",
                    "Kamuvunyi B",
                    "Karambi",
                    "Kavumu A",
                    "Kavumu B"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Runga",
                  "villages": [
                    "Kigarama",
                    "Murambi",
                    "Ndago",
                    "Rugarama A",
                    "Rugarama B"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Nyaruguru",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Busanze",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kirarangombe",
                  "villages": [
                    "Bukinanyana",
                    "Gisenyi",
                    "Gitwe",
                    "Kinyinya",
                    "Masiga",
                    "Uwindava"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkanda",
                  "villages": [
                    "Bitare",
                    "Mutarama",
                    "Mutobo",
                    "Nkanda",
                    "Uwamakumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nteko",
                  "villages": [
                    "Gisoro",
                    "Kabavomo",
                    "Ndatemwa",
                    "Nteko",
                    "Nyarukeri",
                    "Nyarusange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Runyombyi",
                  "villages": [
                    "Bugina",
                    "Gabiro",
                    "Musebeya",
                    "Rango",
                    "Ryabusagara",
                    "Shwima"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shororo",
                  "villages": [
                    "Bukinga",
                    "Mirindi",
                    "Murambi",
                    "Runyami",
                    "Rutabo",
                    "Uwinteko"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Cyahinda",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Coko",
                  "villages": ["Agasharu", "Coko", "Gitara", "Ruko"]
                },
                {
                  "type": "CELLS",
                  "name": "Cyahinda",
                  "villages": [
                    "Cyahinda",
                    "Cyanwa",
                    "Kinyaga",
                    "Saburunduru",
                    "Rutega"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasasa",
                  "villages": ["Gasasa", "Kavumu", "Mugari", "Ryamarembo"]
                },
                {
                  "type": "CELLS",
                  "name": "Muhambara",
                  "villages": [
                    "Busanza",
                    "Byanone",
                    "Gasharu",
                    "Kubitiro",
                    "Nyagatovu",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutobwe",
                  "villages": [
                    "Kanyinya",
                    "Kibumba",
                    "Ngobyi",
                    "Rubona",
                    "Rugarama",
                    "Rutobwe"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kibeho",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gakoma",
                  "villages": ["Nyagishayo", "Rurembo", "Viro"]
                },
                {
                  "type": "CELLS",
                  "name": "Kibeho",
                  "villages": ["Agateko", "Akajonge", "Sinayi"]
                },
                {
                  "type": "CELLS",
                  "name": "Mbasa",
                  "villages": ["Kinazi", "Migina", "Rwimbogo"]
                },
                {
                  "type": "CELLS",
                  "name": "Mpanda",
                  "villages": ["Banga", "Kibayi", "Mpanda", "Munege"]
                },
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": [
                    "Mubuga",
                    "Nyarusovu",
                    "Nyarwumba",
                    "Umurambi",
                    "Uwintobo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyange",
                  "villages": ["Agateko", "Kigona", "Mpatswe", "Nkomero"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kivu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyanyirankora",
                  "villages": ["Businde", "Cyanyirankora", "Gakuta", "Ruganza"]
                },
                {
                  "type": "CELLS",
                  "name": "Gahurizo",
                  "villages": ["Gasezo", "Kintama", "Kintare", "Uwamizirikano"]
                },
                {
                  "type": "CELLS",
                  "name": "Kimina",
                  "villages": ["Kabeza", "Kabingo", "Kimina", "Uwisaga"]
                },
                {
                  "type": "CELLS",
                  "name": "Kivu",
                  "villages": [
                    "Kavumu",
                    "Kivu",
                    "Murambi",
                    "Rubumburi",
                    "Rusuzumiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugerero",
                  "villages": ["Kivumu", "Misundwe", "Nyarwotsi", "Rugerero"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mata",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gorwe",
                  "villages": ["Mataba", "Rimbanya", "Ruhunga"]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": ["Mata", "Murambi", "Nyamyumba", "Runono"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamabuye",
                  "villages": ["Nyacyondo", "Rwinanka", "Tububuru"]
                },
                {
                  "type": "CELLS",
                  "name": "Ramba",
                  "villages": ["Cyafurwe", "Gasasa", "Ramba"]
                },
                {
                  "type": "CELLS",
                  "name": "Rwamiko",
                  "villages": ["Matyazo", "Rwamiko", "Taba"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muganza",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Muganza",
                  "villages": [
                    "Gashinge",
                    "Mubazi",
                    "Muganza",
                    "Ngara",
                    "Nyabirondo",
                    "Rambyanyana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukore",
                  "villages": [
                    "Kanazi",
                    "Karanka",
                    "Nyagisenyi",
                    "Remera",
                    "Rwishywa",
                    "Uwinzira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Samiyonga",
                  "villages": [
                    "Bigugu",
                    "Cyurukore",
                    "Gituntu",
                    "Kigwene",
                    "Mazimeru",
                    "Murambi",
                    "Tangabo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Uwacyiza",
                  "villages": [
                    "Bitaba",
                    "Migendo",
                    "Mukongoro",
                    "Murambya",
                    "Mutovu",
                    "Sekera"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Munini",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Giheta",
                  "villages": [
                    "Gacumu",
                    "Gahango",
                    "Gasare",
                    "Giheta",
                    "Mashya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngarurira",
                  "villages": [
                    "Agatare",
                    "Akarehe",
                    "Gisizi",
                    "Gitega",
                    "Uwumuko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngeri",
                  "villages": [
                    "Akagera",
                    "Mushwati",
                    "Ndago",
                    "Rubona",
                    "Ruseke",
                    "Rushubi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ntwali",
                  "villages": [
                    "Kabirizi",
                    "Ntwari",
                    "Nyambaragasa",
                    "Rwinanka",
                    "Umurambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarure",
                  "villages": [
                    "Kamana",
                    "Kimena",
                    "Muhororo",
                    "Munanira",
                    "Nyarure",
                    "Sheke"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ngera",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bitare",
                  "villages": ["Bitare", "Gashiru", "Sheke"]
                },
                {
                  "type": "CELLS",
                  "name": "Mukuge",
                  "villages": ["Cyamutumba", "Cyaratsi", "Mukuge"]
                },
                {
                  "type": "CELLS",
                  "name": "Murama",
                  "villages": ["Kaganda", "Mbogo", "Nyarugano", "Runyami"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamirama",
                  "villages": ["Kinteko", "Mubuga", "Nyamirama"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyanza",
                  "villages": ["Gisozi", "Kibingo", "Mpinga", "Nyanza"]
                },
                {
                  "type": "CELLS",
                  "name": "Yaramba",
                  "villages": ["Buhunga", "Kirwa", "Musumba", "Yaramba"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ngoma",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Fugi",
                  "villages": [
                    "Akanyaru",
                    "Gasha",
                    "Mutakwa",
                    "Nteko",
                    "Ruli",
                    "Urugeyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibangu",
                  "villages": ["Gituramigina", "Kirehe", "Kiriro", "Nyarukeri"]
                },
                {
                  "type": "CELLS",
                  "name": "Kiyonza",
                  "villages": [
                    "Akagano",
                    "Gacumbi",
                    "Maraba",
                    "Munini",
                    "Mwumba",
                    "Nyagahinga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbuye",
                  "villages": [
                    "Gihishabwenge",
                    "Kigarama",
                    "Mugobe",
                    "Mujahu",
                    "Ururambo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamirama",
                  "villages": [
                    "Akabuye",
                    "Bihembe",
                    "Nyagasozi",
                    "Rushubi",
                    "Ryakanyamiganda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubona",
                  "villages": [
                    "Agasaka",
                    "Agatovu",
                    "Akarambo",
                    "Nyamirama",
                    "Ryarugarama",
                    "Shyoko"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyabimata",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gihemvu",
                  "villages": ["Bihembe", "Bugina", "Gihemvu", "Rugarama"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabere",
                  "villages": ["Kabere", "Nyarunazi", "Uwurusugi"]
                },
                {
                  "type": "CELLS",
                  "name": "Mishungero",
                  "villages": [
                    "Mishungero",
                    "Muyira",
                    "Ngarama",
                    "Rubindi",
                    "Uwaruhigi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabimata",
                  "villages": ["Murambi", "Mutobwe", "Nyabimata", "Rwerere"]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhinga",
                  "villages": ["Agasugi", "Cyumuzi", "Ndaro", "Ruhinga"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyagisozi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Maraba",
                  "villages": ["Bugarama", "Maraba", "Nkima", "Rushunguriro"]
                },
                {
                  "type": "CELLS",
                  "name": "Mwoya",
                  "villages": [
                    "Agatovu",
                    "Bwerankori",
                    "Muhombo",
                    "Mwoya",
                    "Nkomero",
                    "Nyagashubi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkakwa",
                  "villages": [
                    "Bihembe",
                    "Kaduha",
                    "Nkakwa",
                    "Nyarubuye",
                    "Rarire",
                    "Rubuga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagisozi",
                  "villages": [
                    "Muriza",
                    "Nyagishayo",
                    "Nyamiyaga",
                    "Ryabidandi",
                    "Uwimfizi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ruheru",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gitita",
                  "villages": [
                    "Gahotora",
                    "Kibyibushye",
                    "Nyacyonga",
                    "Ruganza",
                    "Rusagara",
                    "Ryanyaruja"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabere",
                  "villages": [
                    "Busenyi",
                    "Gambiriro",
                    "Mukaka",
                    "Murambi",
                    "Nshenyi",
                    "Uwigisura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Remera",
                  "villages": [
                    "Cyivugiza",
                    "Gitwa",
                    "Kirwa",
                    "Mutumba",
                    "Uwinyana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruyenzi",
                  "villages": [
                    "Rukarakara",
                    "Ruvuru",
                    "Ruyenzi",
                    "Tambananga",
                    "Zirambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Uwumusebeya",
                  "villages": [
                    "Gakaranka",
                    "Mubuga",
                    "Rugote",
                    "Uwimbogo",
                    "Yanza"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ruramba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gabiro",
                  "villages": [
                    "Bukoro",
                    "Kageyo",
                    "Kansi",
                    "Nyamirambo",
                    "Ryamuhumbi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Giseke",
                  "villages": [
                    "Giseke",
                    "Kabari",
                    "Kidogo",
                    "Matyazo",
                    "Tugogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarugano",
                  "villages": ["Gisorora", "Kinyonyo", "Nyarugano", "Uruyange"]
                },
                {
                  "type": "CELLS",
                  "name": "Rugogwe",
                  "villages": ["Rugogwe", "Rugusa", "Titi"]
                },
                {
                  "type": "CELLS",
                  "name": "Ruramba",
                  "villages": ["Bugizi", "Busasamana", "Karambi", "Ruramba"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rusenge",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bunge",
                  "villages": ["Bunge", "Jali", "Nyanzoga", "Toraniro"]
                },
                {
                  "type": "CELLS",
                  "name": "Cyuna",
                  "villages": ["Cyuna", "Kiramutse", "Remera", "Uwamuhizi"]
                },
                {
                  "type": "CELLS",
                  "name": "Gikunzi",
                  "villages": ["Jali", "Kibu", "Munanira", "Rwabujagi"]
                },
                {
                  "type": "CELLS",
                  "name": "Mariba",
                  "villages": ["Gihango", "Kabuye", "Miko", "Rasaniro"]
                },
                {
                  "type": "CELLS",
                  "name": "Raranzige",
                  "villages": [
                    "Akabacura",
                    "Gasave",
                    "Karimba",
                    "Ntanda",
                    "Nyamugari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusenge",
                  "villages": ["Kabacuzi", "Kamusindi", "Kavumu", "Runyinya"]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Ruhango",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Bweramana",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buhanda",
                  "villages": [
                    "Bugufi",
                    "Gakongoro",
                    "Gikarabiro",
                    "Kabere",
                    "Kamatungo",
                    "Kavumu",
                    "Mpunu",
                    "Munini",
                    "Nyakidahe",
                    "Nyarubuye",
                    "Rutarabana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitisi",
                  "villages": [
                    "Kabugusu",
                    "Nyamaraba",
                    "Nyarugenge",
                    "Nyarunyinya",
                    "Ruvugizo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murama",
                  "villages": [
                    "Duwane",
                    "Gasharu",
                    "Gisagara",
                    "Kamirishyo",
                    "Karambo",
                    "Karima",
                    "Karutsindo",
                    "Kigarama",
                    "Kivomo",
                    "Rusororo",
                    "Rwavuningoma",
                    "Rwingwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubona",
                  "villages": [
                    "Birambo",
                    "Bugari",
                    "Gasharu",
                    "Kabega",
                    "Kirambo",
                    "Masambu",
                    "Mataba",
                    "Munyinya",
                    "Ntosho",
                    "Nyagasozi",
                    "Nyakabanda",
                    "Nyamuko",
                    "Rugogwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwinyana",
                  "villages": [
                    "Karambi",
                    "Kumunyinya",
                    "Mubuga",
                    "Mukingi",
                    "Nyagakombe",
                    "Nyagitongwe",
                    "Nyarubuye",
                    "Nyarutovu",
                    "Rugarama",
                    "Rugogwe",
                    "Rwinyana",
                    "Samba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Byimana",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kamusenyi",
                  "villages": [
                    "Gahama",
                    "Gakomeye",
                    "Gakurazo",
                    "Gasharu",
                    "Gasiza",
                    "Gitanga",
                    "Kabusheshe",
                    "Kinama",
                    "Mayebe",
                    "Nyakabungo",
                    "Nyarusange",
                    "Rugerero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kirengeri",
                  "villages": [
                    "Gahengeri",
                    "Gatoki",
                    "Kamonyi",
                    "Kirengeri",
                    "Masaka",
                    "Nyabizenga",
                    "Nyamirambo",
                    "Rusororo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mahembe",
                  "villages": [
                    "Akabere",
                    "Kavumu",
                    "Muhororo",
                    "Mujyejuru",
                    "Mutobo",
                    "Nyabisindu",
                    "Nyagisozi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mpanda",
                  "villages": [
                    "Bisika",
                    "Gatwa",
                    "Gitega",
                    "Kanyarira",
                    "Karenge",
                    "Kibande",
                    "Mpanda",
                    "Nyaburondwe",
                    "Nyagahinga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhororo",
                  "villages": [
                    "Bukomero",
                    "Karama",
                    "Karenge",
                    "Kigarama",
                    "Mbuye",
                    "Nyamiseke",
                    "Nyarunyinya",
                    "Remera",
                    "Rukuro",
                    "Rutembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ntenyo",
                  "villages": [
                    "Bugarura",
                    "Gihinga",
                    "Kageyo",
                    "Kamurenzi",
                    "Kavumu",
                    "Mucubi",
                    "Ngando",
                    "Ntenyo",
                    "Nyabisindu",
                    "Rukiriza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakabuye",
                  "villages": [
                    "Gasasa",
                    "Gatobotobo",
                    "Kizibaziba",
                    "Muhororo",
                    "Ndago",
                    "Nyarubumbiro",
                    "Nyarutovu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kabagali",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bihembe",
                  "villages": [
                    "Bihembe",
                    "Bwama",
                    "Kanyinya",
                    "Kirwa",
                    "Misambagiro",
                    "Nyagatovu",
                    "Rusisiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambi",
                  "villages": [
                    "Bugaramantare",
                    "Karambi",
                    "Karurara",
                    "Kashyamba",
                    "Mbuye",
                    "Muhoza",
                    "Rambyanyana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munanira",
                  "villages": [
                    "Byimana",
                    "Kagitare",
                    "Kavumu",
                    "Munanira",
                    "Muremera",
                    "Musekera",
                    "Nyabyunyu",
                    "Remera",
                    "Ruyogoro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Remera",
                  "villages": [
                    "Birambo",
                    "Kabacuzi",
                    "Kamuhirwa",
                    "Muhororo",
                    "Nyarusange",
                    "Ruhare",
                    "Rwankuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwesero",
                  "villages": [
                    "Bugaramantare",
                    "Mayebe",
                    "Nyabivumu",
                    "Remera",
                    "Rwesero",
                    "Serugeme"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwoga",
                  "villages": [
                    "Cyunyu",
                    "Gasharu",
                    "Gitwa",
                    "Kabakamba",
                    "Kanyinya",
                    "Kavumu",
                    "Kiyanja",
                    "Nyabitare",
                    "Nyagisenyi",
                    "Nyarushishi",
                    "Rusebeya"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kinazi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Burima",
                  "villages": [
                    "Burima",
                    "Mirambi",
                    "Nyagahama",
                    "Nyamiyaga",
                    "Nyarugenge",
                    "Nyaruteja"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisali",
                  "villages": [
                    "Gisari",
                    "Kabeza",
                    "Kaduha",
                    "Kakirenzi",
                    "Kamuraza",
                    "Kanaba",
                    "Kibanda",
                    "Matara",
                    "Nyabusunzu",
                    "Nyiranduga",
                    "Remera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kinazi",
                  "villages": [
                    "Gasiza",
                    "Impara",
                    "Kabuga",
                    "Kacyiru",
                    "Kamabuye",
                    "Karama",
                    "Kareshya",
                    "Karuhuga",
                    "Marche -commun",
                    "Mpemba",
                    "Nyabinyenga",
                    "Nyabisindu",
                    "Nyiraruhinga",
                    "Rebero",
                    "Ruhuha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubona",
                  "villages": [
                    "Buhanika",
                    "Gafumba",
                    "Gako",
                    "Gashike",
                    "Kagazi",
                    "Kigarama",
                    "Rubona",
                    "Susa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutabo",
                  "villages": [
                    "Bugiranteko",
                    "Gatonde",
                    "Gitwa",
                    "Kanka",
                    "Mukoma",
                    "Nyarugunga",
                    "Nyarunazi",
                    "Nyirarubayi",
                    "Runzenze",
                    "Rutabo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kinihira",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bweramvura",
                  "villages": [
                    "Bugarura",
                    "Gahororo",
                    "Gihororo",
                    "Kabadende",
                    "Nyabivumu",
                    "Nyagisenyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitinda",
                  "villages": [
                    "Kabasanzu",
                    "Muremure",
                    "Nyagatovu",
                    "Nyamagana",
                    "Nyarugunga",
                    "Nyarusange",
                    "Remera",
                    "Rubona",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kirwa",
                  "villages": [
                    "Gasharu",
                    "Kabareshya",
                    "Muyange",
                    "Nyarubuye",
                    "Rukeri",
                    "Sunzu",
                    "Wimana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muyunzwe",
                  "villages": [
                    "Gasiza",
                    "Muyunzwe",
                    "Nyamirambo",
                    "Nyarubumbiro",
                    "Nyarutovu",
                    "Ruhuha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakogo",
                  "villages": [
                    "Buhanda",
                    "Bweramana",
                    "Gashirabwoba",
                    "Kibirizi",
                    "Rusizi",
                    "Shamba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukina",
                  "villages": [
                    "Dusenyi",
                    "Kabacuzi",
                    "Kabirizi",
                    "Kabuga",
                    "Munini",
                    "Murinzi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mbuye",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyanza",
                  "villages": [
                    "Kabungo",
                    "Murambi",
                    "Nyamikoni",
                    "Rwamiko",
                    "Wimana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisanga",
                  "villages": [
                    "Bienvenue",
                    "Gisanga",
                    "Gishari",
                    "Karama",
                    "Kavumu",
                    "Nyarugenge",
                    "Sabudari",
                    "Sahara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Kabuga",
                    "Kinyinya",
                    "Kirwa",
                    "Mpungwe",
                    "Musenyi",
                    "Nyabisindu",
                    "Nyakabanda",
                    "Nyamutarama",
                    "Rugarama",
                    "Rwinkuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kizibere",
                  "villages": [
                    "Bereshi",
                    "Biraro",
                    "Bunyeshywa",
                    "Kangoma",
                    "Kivumu",
                    "Kizibere",
                    "Mayunzwe",
                    "Nyamiyaga",
                    "Rebero",
                    "Ruhuha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbuye",
                  "villages": [
                    "Buremera",
                    "Cyeru",
                    "Cyobe",
                    "Kamurema",
                    "Kanyinya",
                    "Kinyambo",
                    "Ruyenzi",
                    "Rwimposha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwendo",
                  "villages": [
                    "Cyanika",
                    "Gafunzo",
                    "Gasanganya",
                    "Gatare",
                    "Giticyuma",
                    "Ipate",
                    "Kabuga",
                    "Karama",
                    "Karusizi",
                    "Kavumu",
                    "Kidoma",
                    "Mataba",
                    "Vunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakarekare",
                  "villages": [
                    "Bereshi",
                    "Jari",
                    "Kigabiro",
                    "Nyakarekare",
                    "Nyaruyonga",
                    "Rubona",
                    "Ruyenzi",
                    "Vugiza"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mwendo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gafunzo",
                  "villages": [
                    "Kagarama",
                    "Kajevuba",
                    "Kimburu",
                    "Nyamigina",
                    "Nyamugari",
                    "Ruhamagariro",
                    "Rutagara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gishweru",
                  "villages": [
                    "Kanzu",
                    "Mabanza",
                    "Nyakabuye",
                    "Nyakizu",
                    "Rubona"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamujisho",
                  "villages": [
                    "Bugaramantare",
                    "Gakomeye",
                    "Gitwa",
                    "Nyarusange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigarama",
                  "villages": [
                    "Gisiza",
                    "Gitaraga",
                    "Kabacuzi",
                    "Kaburinga",
                    "Kamuganga",
                    "Kamuzimanganya",
                    "Kivumu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kubutare",
                  "villages": ["Buhoro", "Dusego", "Gasyogogo", "Karambo"]
                },
                {
                  "type": "CELLS",
                  "name": "Mutara",
                  "villages": [
                    "Bunyankungu",
                    "Gashiru",
                    "Kabiha",
                    "Kakarima",
                    "Mbunduye",
                    "Murambi",
                    "Nyabisindu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabibugu",
                  "villages": [
                    "Kiganira",
                    "Ntongwe",
                    "Nyarutovu",
                    "Nyaruvumu",
                    "Rukeri",
                    "Ryakabunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Saruheshyi",
                  "villages": [
                    "Buhigiro",
                    "Gaseke",
                    "Gasharu",
                    "Rugasari",
                    "Ruhondo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ntongwe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gako",
                  "villages": [
                    "Cyimana",
                    "Gikoma",
                    "Kamakara",
                    "Kantwari",
                    "Nyabuhuzu",
                    "Nyabyugi",
                    "Nyamahwa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kareba",
                  "villages": ["Kavumu", "Kibatsi", "Marimba", "Ruko"]
                },
                {
                  "type": "CELLS",
                  "name": "Kayenzi",
                  "villages": [
                    "Kanyete",
                    "Kirwa",
                    "Ntungamo",
                    "Nyagatovu",
                    "Nyamigende"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kebero",
                  "villages": [
                    "Cyeru",
                    "Gasuna",
                    "Kaburanjwiri",
                    "Nyabigunzu",
                    "Nyabitare",
                    "Nyacyonga",
                    "Ruko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagisozi",
                  "villages": ["Karama", "Nyamirama", "Nyarusange"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakabungo",
                  "villages": [
                    "Byimana",
                    "Gacuriro",
                    "Kamaraba",
                    "Karama",
                    "Kigabiro",
                    "Kintore",
                    "Mutima",
                    "Nyamirama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarurama",
                  "villages": [
                    "Gahunga",
                    "Gikoni",
                    "Kamaraba",
                    "Karama",
                    "Mukoni",
                    "Munini",
                    "Nyamirambo",
                    "Nyarugenge",
                    "Nyarwahi",
                    "Ruhuha",
                    "Rwakajuju",
                    "Rwintama"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ruhango",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buhoro",
                  "villages": [
                    "Buhoro",
                    "Gako",
                    "Kabeza",
                    "Kantama",
                    "Karambo",
                    "Muhororo I",
                    "Muhororo II",
                    "Ntinyinshi",
                    "Nyagasozi",
                    "Nyangandika",
                    "Nyarutovu",
                    "Rwinkuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bunyogombe",
                  "villages": [
                    "Bugarura",
                    "Busego",
                    "Gacoko",
                    "Gishegesha",
                    "Kabega",
                    "Kamugaru",
                    "Kamugaza",
                    "Karehe",
                    "Kasemahundo",
                    "Kavumu",
                    "Kigabiro",
                    "Kigarama",
                    "Murehe",
                    "Nyabibugu",
                    "Nyabisindu",
                    "Remera",
                    "Rubazi",
                    "Rusebeya",
                    "Rwankuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gikoma",
                  "villages": [
                    "Gatengeri",
                    "Gikumba",
                    "Karama",
                    "Murambi",
                    "Nangurugomo",
                    "Nyarusange",
                    "Rebero",
                    "Rubiha",
                    "Rurembo",
                    "Ryabonyinka",
                    "Wimana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munini",
                  "villages": [
                    "Bisambu",
                    "Bugari",
                    "Bwiza",
                    "Cyeshero",
                    "Gahama",
                    "Gaseke",
                    "Gataka",
                    "Gitwa",
                    "Kabaja",
                    "Kaburanjwiri",
                    "Kanazi",
                    "Kibingo",
                    "Kigaga",
                    "Kirima",
                    "Kiruhura",
                    "Munini",
                    "Muremera",
                    "Nyabinyenga",
                    "Nyinya",
                    "Ruhuha",
                    "Rwezamenyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musamo",
                  "villages": [
                    "Cana",
                    "Gaseke",
                    "Jokoma",
                    "Kabere",
                    "Kamabare",
                    "Kinama",
                    "Kinkene",
                    "Musamo",
                    "Mwali",
                    "Rwinkuba",
                    "Rwinyege",
                    "Ryanyiranda",
                    "Wimana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamagana",
                  "villages": [
                    "Bumbogo",
                    "Butare I",
                    "Butare II",
                    "Bwangacumu",
                    "Gataka",
                    "Gatengezi",
                    "Gutamba",
                    "Kamabano",
                    "Kigabiro",
                    "Kigimbu",
                    "Kinama",
                    "Mabera",
                    "Mujyejuru I",
                    "Mujyejuru II",
                    "Murinzi",
                    "Ngurukizi",
                    "Ntungamo",
                    "Nyabihanga",
                    "Nyagasozi",
                    "Nyamagana",
                    "Nyamugari",
                    "Nyarusange I",
                    "Nyarusange II",
                    "Ruhango",
                    "Ruhuha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwoga",
                  "villages": [
                    "Bihome",
                    "Bugarama",
                    "Bunyogombe",
                    "Bushenyi",
                    "Gasharu",
                    "Gatebe",
                    "Kabambati",
                    "Kangoga",
                    "Kavumu",
                    "Kibiraro",
                    "Muyange",
                    "Mwezi",
                    "Nyabisindu",
                    "Ruhango",
                    "Rwinkuba",
                    "Rwoga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Tambwe",
                  "villages": [
                    "Buterana",
                    "Mubuga",
                    "Nyamugari I",
                    "Nyamugari II",
                    "Nyundo",
                    "Ruduha I",
                    "Ruduha II",
                    "Rugarama",
                    "Rugondo",
                    "Tambwe"
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "type": "PROVINCE",
      "name": "West",
      "districts": [
        {
          "type": "DISTRICT",
          "name": "Karongi",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Bwishyura",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Burunga",
                  "villages": [
                    "Kabuga",
                    "Majuri",
                    "Matyazo",
                    "Nyabikenke",
                    "Nyamarebe",
                    "Ruyenzi",
                    "Twimbogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasura",
                  "villages": [
                    "Gafuruguto",
                    "Gatare",
                    "Gatoki",
                    "Gisayo",
                    "Nyabihanga",
                    "Nyagahinga",
                    "Nyarusange",
                    "Ruganda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitarama",
                  "villages": [
                    "Gitarama",
                    "Gomba",
                    "Josi",
                    "Karambo",
                    "Kigezi",
                    "Kirambo",
                    "Kivomo",
                    "Nyamigina"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kayenzi",
                  "villages": [
                    "Buhoro",
                    "Gitega",
                    "Mugomba",
                    "Nyabikenke",
                    "Ruhande",
                    "Sakinnyaga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibuye",
                  "villages": ["Gacumba", "Gatwaro", "Rurembo"]
                },
                {
                  "type": "CELLS",
                  "name": "Kiniha",
                  "villages": [
                    "Karutete",
                    "Kiyovu",
                    "Maryohe",
                    "Nyabaguma",
                    "Nyakigezi",
                    "Nyarurembo",
                    "Nyegabo",
                    "Ruganda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarusazi",
                  "villages": [
                    "Birembo",
                    "Bupfune",
                    "Bwishyura",
                    "Kanyabusage",
                    "Karongi",
                    "Nyarusozi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gashari",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Birambo",
                  "villages": [
                    "Birambo",
                    "Gashari",
                    "Kabirizi",
                    "Kakibereka",
                    "Kananira",
                    "Ntarabana",
                    "Nyabikenke",
                    "Nyakibuguma",
                    "Nyarusange",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musasa",
                  "villages": [
                    "Kabasare",
                    "Kaduha",
                    "Kagangare",
                    "Kigarama",
                    "Musasa",
                    "Rasaniro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwendo",
                  "villages": [
                    "Gakurwe",
                    "Gataba",
                    "Gihororo",
                    "Kabageni",
                    "Kayogoro",
                    "Nyamigina"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugobagoba",
                  "villages": [
                    "Karambo",
                    "Karutare",
                    "Kibingo",
                    "Musongati",
                    "Nkingo",
                    "Shungwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Tongati",
                  "villages": ["Kayonga", "Nyabivumu", "Nyagisozi", "Rubona"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gishyita",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buhoro",
                  "villages": ["Buhire", "Mboneko", "Mweya", "Ruhunde", "Tura"]
                },
                {
                  "type": "CELLS",
                  "name": "Cyanya",
                  "villages": [
                    "Gataba",
                    "Gatare",
                    "Gisiza",
                    "Gitovu",
                    "Kabuga",
                    "Kagano",
                    "Mpatsi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigarama",
                  "villages": ["Gitwa", "Kabwenge", "Karenge", "Kubutare"]
                },
                {
                  "type": "CELLS",
                  "name": "Munanira",
                  "villages": [
                    "Butare",
                    "Bweramvura",
                    "Gisoro",
                    "Ngugu",
                    "Nyakabuye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musasa",
                  "villages": [
                    "Cyimbo",
                    "Gasharu",
                    "Kabuga",
                    "Kamunungu",
                    "Kibaya",
                    "Kirunga",
                    "Musebeya",
                    "Rwagisasa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngoma",
                  "villages": [
                    "Kanyinya",
                    "Magarama",
                    "Mataba",
                    "Murambi",
                    "Rufumberi",
                    "Uwingabo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gitesi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasharu",
                  "villages": [
                    "Gasharu",
                    "Kinyami",
                    "Nyarukeri",
                    "Nyaruvumu",
                    "Rwintare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitega",
                  "villages": [
                    "Bugoberi",
                    "Kagari",
                    "Kamihaho",
                    "Muvungu",
                    "Senga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanunga",
                  "villages": [
                    "Giticyuma",
                    "Karongi",
                    "Nemba",
                    "Nyabitare",
                    "Nyagisozi",
                    "Nyarugenge"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kirambo",
                  "villages": [
                    "Buye",
                    "Karongi",
                    "Kirambo",
                    "Nyarusange",
                    "Nzabuhara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munanira",
                  "villages": [
                    "Gahigiro",
                    "Gatare",
                    "Kinama",
                    "Munanira",
                    "Nyabigugu",
                    "Nyarucyamo",
                    "Ruhundo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamiringa",
                  "villages": [
                    "Burega",
                    "Cyimba",
                    "Gisasa",
                    "Kagari",
                    "Kivuruga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhinga",
                  "villages": [
                    "Gasayo",
                    "Muramba",
                    "Nyabikati",
                    "Nyagahinga",
                    "Nyamiyaga",
                    "Nyarubuye",
                    "Ruhondo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwariro",
                  "villages": [
                    "Karwiru",
                    "Kigarama",
                    "Kirwa",
                    "Rurumbu",
                    "Rusekera",
                    "Rwariro"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mubuga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kagabiro",
                  "villages": [
                    "Bitaba",
                    "Buhari",
                    "Kagabiro",
                    "Kagarama",
                    "Mweya",
                    "Nyabinyenga",
                    "Nyakabande",
                    "Nyakagezi",
                    "Rubondo",
                    "Runyinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murangara",
                  "villages": [
                    "Gisunzu",
                    "Kabuga",
                    "Kaduha",
                    "Karora",
                    "Murangara",
                    "Nyabitare",
                    "Rubyiro",
                    "Rwakamuri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagatovu",
                  "villages": [
                    "Bikomero",
                    "Gisizi",
                    "Karora",
                    "Mara",
                    "Nyagatovu",
                    "Nyankira",
                    "Ryarugenzi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ryaruhanga",
                  "villages": [
                    "Bikenke",
                    "Gihira",
                    "Jurwe",
                    "Kizibaziba",
                    "Mubuga",
                    "Rwamiko",
                    "Ryaruhanga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Murambi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": [
                    "Cyamatare",
                    "Gasebeya",
                    "Kazibaziba",
                    "Migina",
                    "Nyabivumu",
                    "Nyabwoma",
                    "Nyaruvumu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhororo",
                  "villages": [
                    "Birambo",
                    "Bwakira",
                    "Kananira",
                    "Ndago",
                    "Nyabiranga",
                    "Nyakabuye",
                    "Tariro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkoto",
                  "villages": [
                    "Gakoma",
                    "Gisovu",
                    "Kakirinda",
                    "Kibamba",
                    "Mataba",
                    "Muramba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarunyinya",
                  "villages": [
                    "Gituntu",
                    "Kamasambu",
                    "Karambo",
                    "Kigandaro",
                    "Murambi",
                    "Nyarusave"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shyembe",
                  "villages": [
                    "Bugaramantare",
                    "Gitwa",
                    "Kaburega",
                    "Kavumu",
                    "Musibya",
                    "Nyabaguma",
                    "Nyabisindu",
                    "Nyamagana",
                    "Nyamugari",
                    "Nyaruhanga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Murundi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bukiro",
                  "villages": [
                    "Bugeni",
                    "Bukiro",
                    "Gitwa",
                    "Munzanga",
                    "Nyamabuye",
                    "Nyamyumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabaya",
                  "villages": [
                    "Burwi",
                    "Gakomeye",
                    "Karambo",
                    "Mujyojyo",
                    "Murambi",
                    "Mwumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamina",
                  "villages": [
                    "Kiraro",
                    "Kirehe",
                    "Murehe",
                    "Mwunguzi",
                    "Nyakarambi",
                    "Nzobe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kareba",
                  "villages": [
                    "Bwenda",
                    "Gasave",
                    "Gasharu",
                    "Gisebeya",
                    "Kibingo",
                    "Kuruganda",
                    "Ruhungamiyaga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamushishi",
                  "villages": [
                    "Gasharu",
                    "Gitwa",
                    "Kisenge",
                    "Ngoma",
                    "Nyarurembo",
                    "Remera",
                    "Rubona"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nzaratsi",
                  "villages": [
                    "Gatwaro",
                    "Gishyikiro",
                    "Nyabinombe",
                    "Nyamabuye",
                    "Remera",
                    "Ruhondo",
                    "Rusovu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mutuntu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Byogo",
                  "villages": [
                    "Gasenyi",
                    "Gititi",
                    "Kivumu",
                    "Muhondo",
                    "Murambi",
                    "Musango",
                    "Rugogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasharu",
                  "villages": [
                    "Gashanga",
                    "Gasharu",
                    "Gituntu",
                    "Mukungu",
                    "Mutuntu",
                    "Nyabiguri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisayura",
                  "villages": [
                    "Gashubi",
                    "Gatwa",
                    "Kabariro",
                    "Mayombo",
                    "Ryarugango",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanyege",
                  "villages": [
                    "Gitumba",
                    "Kanyege",
                    "Kavumu",
                    "Manji",
                    "Mukongoro",
                    "Nyarubuye",
                    "Rugogwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kinyonzwe",
                  "villages": [
                    "Kadehero",
                    "Kinyonzwe",
                    "Matyazo",
                    "Ruhindiro",
                    "Uwabashi",
                    "Uwibumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murengezo",
                  "villages": [
                    "Cyamakamba",
                    "Karambo",
                    "Ngundusi",
                    "Nyarutovu",
                    "Uwiraro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwufi",
                  "villages": [
                    "Cyiha",
                    "Gatiti",
                    "Mwumba",
                    "Rasaniro",
                    "Rugusa",
                    "Ruhuha"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rubengera",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bubazi",
                  "villages": [
                    "Gakomeye",
                    "Gitwa",
                    "Kabuga",
                    "Kavumu",
                    "Kigarama",
                    "Makurungwe",
                    "Nyagahinga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gacaca",
                  "villages": [
                    "Gakomeye",
                    "Gasharu",
                    "Kamuvunyi",
                    "Kamwijagi",
                    "Karehe",
                    "Nyarubuye",
                    "Remera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisanze",
                  "villages": [
                    "Kabatara",
                    "Kibande",
                    "Kigabiro",
                    "Nyabitare",
                    "Nyamagana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitwa",
                  "villages": [
                    "Bizu",
                    "Gaseke",
                    "Gitega",
                    "Kibande",
                    "Muremera",
                    "Rubona",
                    "Rusebeya",
                    "Rwakigarati"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibirizi",
                  "villages": [
                    "Buhoro",
                    "Cyimana",
                    "Kabeza",
                    "Kagarama",
                    "Kamusanganya",
                    "Kimigenge",
                    "Ndengwa",
                    "Rubona"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mataba",
                  "villages": [
                    "Gitwa",
                    "Kabahizi",
                    "Mufumbezi",
                    "Nyagisozi",
                    "Ruvumbu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarugenge",
                  "villages": [
                    "Bigugu",
                    "Gatare",
                    "Kabazi",
                    "Kambogo",
                    "Karusha",
                    "Nkomagurwa",
                    "Rukaragata"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruragwe",
                  "villages": [
                    "Bunyankungu",
                    "Kabeza",
                    "Nyagahinga",
                    "Nyagasozi",
                    "Nyagatovu",
                    "Nyakabungo",
                    "Rutabo",
                    "Rwimpongo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rugabano",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gisiza",
                  "villages": [
                    "Gitwa",
                    "Kamina",
                    "Muciro",
                    "Rubona",
                    "Rugabano",
                    "Winyambo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitega",
                  "villages": [
                    "Cyarubariro",
                    "Kabyaza",
                    "Kigarama",
                    "Mihora",
                    "Misagara",
                    "Mutotozi",
                    "Ngoma",
                    "Rwesero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitovu",
                  "villages": [
                    "Bisusa",
                    "Gatobo",
                    "Matyazo",
                    "Nganzo",
                    "Nyabagoyi",
                    "Rugabe",
                    "Rutoyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Bihembe",
                    "Kamata",
                    "Karambo",
                    "Kigarama",
                    "Migina",
                    "Nyabitare",
                    "Nyagasozi",
                    "Simbi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": [
                    "Gatwaro",
                    "Kabyigo",
                    "Karumbi",
                    "Kavumu",
                    "Mataba",
                    "Uwigiti"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mucyimba",
                  "villages": [
                    "Gihara",
                    "Kagombyi",
                    "Kamonyi",
                    "Kigarama",
                    "Kivumu",
                    "Rwagisozi",
                    "Ryangondo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rufungo",
                  "villages": [
                    "Bucensha",
                    "Bwihe",
                    "Gitabi",
                    "Karambo",
                    "Kavumu",
                    "Rukoko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwungo",
                  "villages": [
                    "Gahengeri",
                    "Gasharu",
                    "Kabuye",
                    "Rwungo",
                    "Wisazi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Tyazo",
                  "villages": [
                    "Karambi",
                    "Kirabo",
                    "Nyakabingo",
                    "Rubatura",
                    "Winzira",
                    "Wurugogwe"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ruganda",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Biguhu",
                  "villages": [
                    "Gitwa",
                    "Murambi",
                    "Muremure",
                    "Ngange",
                    "Nyagasozi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabingo",
                  "villages": ["Bugarura", "Kabingo", "Nyagisozi"]
                },
                {
                  "type": "CELLS",
                  "name": "Kinyovu",
                  "villages": ["Bizitiro", "Kabaranda", "Kanyegenyege"]
                },
                {
                  "type": "CELLS",
                  "name": "Kivumu",
                  "villages": ["Birambo", "Kagorora", "Murambi", "Nyarusange"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabikeri",
                  "villages": ["Dusasa", "Gahororo", "Kiguhu", "Nyabikeri"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamugwagwa",
                  "villages": ["Burango", "Kaduha", "Kibari", "Nyamugwagwa"]
                },
                {
                  "type": "CELLS",
                  "name": "Rubona",
                  "villages": ["Gahunduguru", "Maryohe", "Muciro", "Rubona"]
                },
                {
                  "type": "CELLS",
                  "name": "Rugobagoba",
                  "villages": [
                    "Gatare",
                    "Karambo",
                    "Nyabisiga",
                    "Nyagasambu",
                    "Nyakivumba",
                    "Nyarutembe"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rwankuba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bigugu",
                  "villages": [
                    "Kagusa",
                    "Kavumu",
                    "Mifuba",
                    "Nyantwa",
                    "Ruhondo",
                    "Ruhuha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bisesero",
                  "villages": ["Bisesero", "Jurwe", "Kigarama", "Uwingabo"]
                },
                {
                  "type": "CELLS",
                  "name": "Gasata",
                  "villages": [
                    "Cyabahanga",
                    "Muhingo",
                    "Nyagafumba",
                    "Rugeti",
                    "Rurebero",
                    "Rutiti",
                    "Rwasheke"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munini",
                  "villages": [
                    "Bweramana",
                    "Byimana",
                    "Gakangaga",
                    "Kinaba",
                    "Muvumba",
                    "Muyira",
                    "Winzira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakamira",
                  "villages": ["Mahembe", "Musango", "Nyarushekera"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarusanga",
                  "villages": [
                    "Gasharu",
                    "Karambo",
                    "Kigogwe",
                    "Kanyege",
                    "Wingwa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubazo",
                  "villages": [
                    "Bucyurabuhoro",
                    "Kanyarusanga",
                    "Nyaruyaga",
                    "Ruhinga",
                    "Wamahoro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubumba",
                  "villages": ["Gishwati", "Himbo", "Rukore", "Ryampande"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Twumba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bihumbe",
                  "villages": [
                    "Bihumbe",
                    "Bivumu",
                    "Gikaranka",
                    "Nyabubare",
                    "Rushishi",
                    "Uwintobo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gakuta",
                  "villages": [
                    "Gakoko",
                    "Karumbi",
                    "Nyamiryango",
                    "Rugogwe",
                    "Twumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisovu",
                  "villages": [
                    "Bikunda",
                    "Gashihe",
                    "Kanyovu",
                    "Karambo",
                    "Kibuburo",
                    "Mwumba",
                    "Nyakabingo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitabura",
                  "villages": [
                    "Gatare",
                    "Kibingo",
                    "Mataba",
                    "Nyakiyabo",
                    "Nyarubuye",
                    "Nyaruyaga",
                    "Rugeyo",
                    "Tuvunasogi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kavumu",
                  "villages": [
                    "Gasharu",
                    "Kaganda",
                    "Kavumu",
                    "Muhira",
                    "Murambi",
                    "Muronzi",
                    "Nyarutagara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murehe",
                  "villages": ["Duhati", "Gatema", "Kaganda", "Murehe"]
                },
                {
                  "type": "CELLS",
                  "name": "Rutabi",
                  "villages": ["Gahondo", "Nyirabununu", "Rutabi", "Wintobo"]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Ngororero",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Bwira",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bungwe",
                  "villages": ["Gasura", "Kirwa", "Nkuri", "Rutembo", "Rutoyi"]
                },
                {
                  "type": "CELLS",
                  "name": "Cyahafi",
                  "villages": ["Bushyogero", "Cyahafi", "Kamina", "Rushubi"]
                },
                {
                  "type": "CELLS",
                  "name": "Gashubi",
                  "villages": [
                    "Gasasa",
                    "Gitonde",
                    "Rugeshi",
                    "Rukeri",
                    "Rwamakara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabarondo",
                  "villages": [
                    "Bereshi",
                    "Gitarama",
                    "Kurushishi",
                    "Mukingi",
                    "Nyakarambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhindage",
                  "villages": ["Kabirizi", "Kiregamazi", "Mwiha", "Nyabitare"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gatumba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyome",
                  "villages": [
                    "Birambo",
                    "Mpara",
                    "Musagara",
                    "Nyakagezi",
                    "Ruvumu",
                    "Rwasare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatsibo",
                  "villages": [
                    "Gasave",
                    "Gatongo",
                    "Gatsibo",
                    "Gatwa",
                    "Kimirama",
                    "Rutabataba",
                    "Shyogi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamasiga",
                  "villages": [
                    "Byimana",
                    "Gasave",
                    "Karehe",
                    "Kavumu",
                    "Nsyabire",
                    "Nyenyeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambo",
                  "villages": [
                    "Gahinga",
                    "Gitega",
                    "Kabarore",
                    "Karehe",
                    "Kimisagara",
                    "Nteko",
                    "Rugara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhanga",
                  "villages": [
                    "Butare",
                    "Gasagara",
                    "Jimbu",
                    "Kabeza",
                    "Kadehero",
                    "Kamina"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusumo",
                  "villages": ["Kagarama", "Mataba", "Mukaragata", "Rusumo"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Hindiro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatare",
                  "villages": ["Buyungu", "Kigarama", "Muhororo", "Nyagasozi"]
                },
                {
                  "type": "CELLS",
                  "name": "Gatega",
                  "villages": [
                    "Cyahafi",
                    "Gapfura",
                    "Gasharu",
                    "Gasovu",
                    "Huriro",
                    "Kabenge",
                    "Kagarama",
                    "Rutsiro",
                    "Sereri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kajinge",
                  "villages": ["Bwoga", "Kamana", "Rugari", "Rugeshi"]
                },
                {
                  "type": "CELLS",
                  "name": "Marantima",
                  "villages": [
                    "Kagugu",
                    "Karambo",
                    "Kiribata",
                    "Munyegera",
                    "Muvugangoma",
                    "Rugarika"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugendabari",
                  "villages": ["Kabuga", "Kamonyi", "Mituga", "Mukoni"]
                },
                {
                  "type": "CELLS",
                  "name": "Runyinya",
                  "villages": ["Marembo", "Murambi", "Rugarambiro", "Rwamiko"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kabaya",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Busunzu",
                  "villages": [
                    "Gitaba",
                    "Kabarenzi",
                    "Kabere",
                    "Kabuganza",
                    "Kabusizi",
                    "Kinyamiyaga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gaseke",
                  "villages": [
                    "Mbandari",
                    "Mitabo",
                    "Mizingo",
                    "Muturagara",
                    "Nyamugari",
                    "Nyamweru",
                    "Rugari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabaya",
                  "villages": [
                    "Bitare",
                    "Kimisagara",
                    "Kiyovu",
                    "Migongo",
                    "Nyanza",
                    "Rebero",
                    "Rurembo",
                    "Rwantozi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwendo",
                  "villages": [
                    "Bukonde",
                    "Butare",
                    "Kabeza",
                    "Karambi",
                    "Merabuye",
                    "Nyabarinda",
                    "Rubambiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngoma",
                  "villages": [
                    "Gisebeya",
                    "Gitumba",
                    "Hanika",
                    "Ngoma",
                    "Nyamugeyo",
                    "Rukorati",
                    "Rutoyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyenyeri",
                  "villages": [
                    "Bukonde",
                    "Gashyitsi",
                    "Kabasare",
                    "Kimiramba",
                    "Kirwa",
                    "Nyamugari",
                    "Nyasenge"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kageyo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kageshi",
                  "villages": [
                    "Cyungo",
                    "Kantara",
                    "Kariha",
                    "Mukaka",
                    "Ruganda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kirwa",
                  "villages": ["Gatovu", "Gihonga", "Kabagari", "Nyaruzenga"]
                },
                {
                  "type": "CELLS",
                  "name": "Mukore",
                  "villages": [
                    "Gaseke",
                    "Gitongo",
                    "Kabuhake",
                    "Nyamatanga",
                    "Rusenyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muramba",
                  "villages": ["Gashinge", "Kabyaza", "Murangara", "Rurambo"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamata",
                  "villages": [
                    "Bereshi",
                    "Kabuga",
                    "Kagarama",
                    "Kibanda",
                    "Nyamutuku"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwamamara",
                  "villages": ["Gaseke", "Gasiza", "Giseke", "Mubuga"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kavumu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Birembo",
                  "villages": [
                    "Buhuma",
                    "Gashaki",
                    "Kantobo",
                    "Nyabitsina",
                    "Rwanamiza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitwa",
                  "villages": [
                    "Biraro",
                    "Karambi",
                    "Kaziba",
                    "Nyamugari",
                    "Nyarukara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murinzi",
                  "villages": [
                    "Cyasenge",
                    "Gasibya",
                    "Ntebeyinuma",
                    "Nyaramba",
                    "Ruhurura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamugeyo",
                  "villages": [
                    "Gatovu",
                    "Kabere",
                    "Karambo",
                    "Murimba",
                    "Nyabubanda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugeshi",
                  "villages": [
                    "Cyuzi",
                    "Gasumo",
                    "Kabeza",
                    "Karambi",
                    "Mwiyanike"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Tetero",
                  "villages": [
                    "Bereshi",
                    "Gatsibo",
                    "Kasumo",
                    "Mizingo",
                    "Ruherahere"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Matyazo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Binana",
                  "villages": [
                    "Busoro",
                    "Kabuye",
                    "Kaseke",
                    "Kavumu",
                    "Nyagisozi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitega",
                  "villages": [
                    "Barama",
                    "Gahanda",
                    "Gasayo",
                    "Gataka",
                    "Kabara",
                    "Rwankenke"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Matare",
                  "villages": [
                    "Gako",
                    "Gitega",
                    "Kamasorori",
                    "Munyinya",
                    "Mwumba",
                    "Nyenyeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutare",
                  "villages": [
                    "Kabingo",
                    "Nyakiliba",
                    "Ruhurura",
                    "Rwamabuye",
                    "Shori"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwamiko",
                  "villages": ["Butare", "Nyakibande", "Rusororo", "Rwamiko"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muhanda",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bugarura",
                  "villages": [
                    "Bugarura",
                    "Burorero",
                    "Gatomvu",
                    "Ngando",
                    "Nkongora",
                    "Runayu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasiza",
                  "villages": [
                    "Gasiza",
                    "Kabeza",
                    "Kigina",
                    "Nyenyeri",
                    "Rukobora",
                    "Rurandama",
                    "Rwantobotobo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mashya",
                  "villages": [
                    "Byerezo",
                    "Kagano",
                    "Karuhindura",
                    "Kazuba",
                    "Maryoha",
                    "Rubaya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nganzo",
                  "villages": [
                    "Gisebeya",
                    "Gisiza",
                    "Gisunzu",
                    "Misemburo",
                    "Murehe",
                    "Ntaruko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngoma",
                  "villages": [
                    "Bugobora",
                    "Gacaca",
                    "Karambi",
                    "Ntendure",
                    "Rucano",
                    "Ruganda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutagara",
                  "villages": [
                    "Bambiro",
                    "Gaseke",
                    "Kabari",
                    "Kamashya",
                    "Mushishiro",
                    "Nyamutoni",
                    "Nyanshundura",
                    "Rukondo",
                    "Rurambo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muhororo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bweramana",
                  "villages": [
                    "Buyenzi",
                    "Gasave",
                    "Musanzubize",
                    "Nyagaseke",
                    "Ruhanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": [
                    "Burengo",
                    "Gashonyi",
                    "Gasovu",
                    "Mitsimbi",
                    "Murambi",
                    "Nyabigogoro",
                    "Nyamirama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Myiha",
                  "villages": ["Kabyiniro", "Myiha", "Shori"]
                },
                {
                  "type": "CELLS",
                  "name": "Rugogwe",
                  "villages": ["Butinza", "Kibingo", "Murambi", "Nganzo"]
                },
                {
                  "type": "CELLS",
                  "name": "Rusororo",
                  "villages": [
                    "Buhiro",
                    "Gapfura",
                    "Gisovu",
                    "Kagunga",
                    "Rongi",
                    "Ryabadanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sanza",
                  "villages": [
                    "Gashyushya",
                    "Kansi",
                    "Mubuga",
                    "Nyaruhondo",
                    "Sanza"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ndaro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bijyojyo",
                  "villages": [
                    "Bijyojyo",
                    "Birima",
                    "Cyajongo",
                    "Gasave",
                    "Kavumu",
                    "Kibuga",
                    "Runyoni",
                    "Rutonde"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bitabage",
                  "villages": [
                    "Gasharu",
                    "Gituza",
                    "Kamuyobora",
                    "Kinga",
                    "Nganzo",
                    "Ngugu",
                    "Nyamugari",
                    "Rwamikeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabageshi",
                  "villages": [
                    "Gasharu",
                    "Kabuga",
                    "Kandamira",
                    "Masoro",
                    "Ruhanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibanda",
                  "villages": [
                    "Kamina",
                    "Kideberi",
                    "Kimirehe",
                    "Kirombozi",
                    "Ruhuha",
                    "Rutambiro",
                    "Rwamateke",
                    "Rwambogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kinyovi",
                  "villages": ["Gahunga", "Giseke", "Rugeyo", "Rusebeya"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ngororero",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kaseke",
                  "villages": [
                    "Cyandago",
                    "Gatare",
                    "Kabeza",
                    "Kabusunzu",
                    "Kanyinya",
                    "Nyabisindu",
                    "Nyamabuye",
                    "Nyarubari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kazabe",
                  "villages": [
                    "Butezi",
                    "Cyansi",
                    "Kazabe",
                    "Murambi",
                    "Ngororero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mugano",
                  "villages": [
                    "Gashinya",
                    "Kabuga",
                    "Mana",
                    "Manogo",
                    "Mpara",
                    "Nyabisindu",
                    "Nyenyeri",
                    "Ruhuha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyange",
                  "villages": [
                    "Gatare",
                    "Gihe",
                    "Kabeza",
                    "Karama",
                    "Mazimeru",
                    "Nyakaganzo",
                    "Nyange",
                    "Turamigina"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rususa",
                  "villages": [
                    "Cyumba",
                    "Gasarara",
                    "Kabagari",
                    "Nyarubingo",
                    "Rukaragata",
                    "Rususa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Torero",
                  "villages": [
                    "Gatare",
                    "Kanama",
                    "Karera",
                    "Nyakariba",
                    "Nyamabuye",
                    "Nyamiyaga",
                    "Rwambariro"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyange",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bambiro",
                  "villages": [
                    "Bugabe",
                    "Butare",
                    "Gakoma",
                    "Muzi",
                    "Nyarushubi",
                    "Rwasankuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gaseke",
                  "villages": [
                    "Birambo",
                    "Dutwe",
                    "Gaseke",
                    "Giko",
                    "Ngobagoba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nsibo",
                  "villages": [
                    "Cyambogo",
                    "Kanyinya",
                    "Muganza",
                    "Murambi",
                    "Nyange",
                    "Nyarusange",
                    "Vungu",
                    "Zegenya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Vuganyana",
                  "villages": [
                    "Kakinyoni",
                    "Kamuriza",
                    "Karambo",
                    "Kazenga",
                    "Mbobo",
                    "Ngorore",
                    "Nyagatama",
                    "Nyamyungo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Sovu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Birembo",
                  "villages": [
                    "Kabayengo",
                    "Mahembe",
                    "Muyange",
                    "Nshano",
                    "Ruseke"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagano",
                  "villages": [
                    "Gitabage",
                    "Karambo",
                    "Ndagarago",
                    "Nyamuza",
                    "Rusenge"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanyana",
                  "villages": [
                    "Bitaba",
                    "Gahombo",
                    "Gashihe",
                    "Mugobati",
                    "Ruganda",
                    "Rusebeya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musenyi",
                  "villages": [
                    "Gihonga",
                    "Gisakavu",
                    "Gisiza",
                    "Kabuga",
                    "Rubindi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabipfura",
                  "villages": [
                    "Butenga",
                    "Gatare",
                    "Migendezo",
                    "Nyirabwina",
                    "Sanzare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rutovu",
                  "villages": [
                    "Gasiza",
                    "Kanyirajana",
                    "Kigusa",
                    "Ngaza",
                    "Ngugu",
                    "Rukeri"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Nyabihu",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Bigogwe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Arusha",
                  "villages": [
                    "Arusha",
                    "Bukinanyana",
                    "Busasamana",
                    "Ngamba",
                    "Ngandu",
                    "Nyabishunguru",
                    "Nyagihinga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Basumba",
                  "villages": [
                    "Buheke",
                    "Gasizi",
                    "Giticyinyoni",
                    "Ngando",
                    "Rusenge",
                    "Vuga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kijote",
                  "villages": [
                    "Bikingi",
                    "Bukinanyana",
                    "Busasamana",
                    "Gasiza",
                    "Gatagara",
                    "Kabaya",
                    "Kazuba",
                    "Kijote",
                    "Shaba",
                    "Zihari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kora",
                  "villages": [
                    "Bweramana",
                    "Kabatezi",
                    "Kabuga",
                    "Kageli",
                    "Ruhinga",
                    "Rukore",
                    "Rwankuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhe",
                  "villages": [
                    "Bihangara",
                    "Kananira",
                    "Kirandaryi",
                    "Murambi",
                    "Rusogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rega",
                  "villages": [
                    "Gaturo",
                    "Kabaya",
                    "Kagano",
                    "Kariyeri",
                    "Kinamba",
                    "Mizingo",
                    "Ngangare",
                    "Nyagafumberi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Jenda",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bukinanyana",
                  "villages": [
                    "Bibanza",
                    "Bugarama",
                    "Bukinanyana",
                    "Kageri",
                    "Karuhirwa",
                    "Kibaya",
                    "Nsakira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasizi",
                  "villages": [
                    "Kagano",
                    "Kanyaru",
                    "Kanzenze",
                    "Kinyengagi",
                    "Mikingo",
                    "Munanira",
                    "Rwanamiza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabatezi",
                  "villages": [
                    "Gitambuko",
                    "Kagaga",
                    "Kibuye",
                    "Musumba",
                    "Ndorwa",
                    "Runyanja"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kareba",
                  "villages": [
                    "Bizu",
                    "Gikombe",
                    "Kamatenge",
                    "Kareba",
                    "Nyacyonga",
                    "Rebero",
                    "Rubare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyirakigugu",
                  "villages": [
                    "Cyamabuye",
                    "Gisozi",
                    "Jenda",
                    "Nteranya",
                    "Nyamutukura",
                    "Rushunguru"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rega",
                  "villages": [
                    "Bihinga",
                    "Gakarara",
                    "Gasesero",
                    "Kajebeshi",
                    "Rega",
                    "Rubare",
                    "Terimbere"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Jomba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasiza",
                  "villages": [
                    "Cyumba",
                    "Gahama",
                    "Gasiza",
                    "Isangano",
                    "Kabingo",
                    "Kanama",
                    "Nyundo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasura",
                  "villages": [
                    "Gasura",
                    "Gisoro",
                    "Kagano",
                    "Rwandarugari",
                    "Ryabasenge",
                    "Ryabirumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisizi",
                  "villages": [
                    "Futi",
                    "Gahanga",
                    "Gikaranka",
                    "Gisizi",
                    "Kagege"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Guriro",
                  "villages": [
                    "Guriro",
                    "Kabari",
                    "Misegwibiri",
                    "Ngabo",
                    "Nyarusongati",
                    "Ruhunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kavumu",
                  "villages": [
                    "Gasanze",
                    "Kavumu",
                    "Muhare",
                    "Munyege",
                    "Rugerero",
                    "Rushubi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamitanzi",
                  "villages": [
                    "Bihinga",
                    "Kivumu",
                    "Ntwaro",
                    "Nyamitanzi",
                    "Rubavu",
                    "Rugera",
                    "Ruhongore",
                    "Rutabu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kabatwa",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Batikoti",
                  "villages": ["Batikoti", "Kamuhe", "Rubare", "Sake"]
                },
                {
                  "type": "CELLS",
                  "name": "Cyamvumba",
                  "villages": ["Kabagabo", "Murambi", "Nyabitembo"]
                },
                {
                  "type": "CELLS",
                  "name": "Gihorwe",
                  "villages": ["Bisukiro", "Kaminuza", "Kinyababa", "Rushubi"]
                },
                {
                  "type": "CELLS",
                  "name": "Myuga",
                  "villages": [
                    "Akabeza",
                    "Akimitoni",
                    "Butaka",
                    "Myuga",
                    "Rugendabari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngando",
                  "villages": [
                    "Gaharawe",
                    "Kiramira",
                    "Mahurura",
                    "Ngando",
                    "Ruhango"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugarama",
                  "villages": [
                    "Karambi",
                    "Kinkware",
                    "Masasa",
                    "Rebero",
                    "Remera"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Karago",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Busoro",
                  "villages": [
                    "Gasasa",
                    "Gatagara",
                    "Gisesa",
                    "Kageshi",
                    "Kagohe",
                    "Rebero",
                    "Ruhigiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyamabuye",
                  "villages": [
                    "Buremera",
                    "Kinyanja",
                    "Matyazo",
                    "Muderi",
                    "Muremure",
                    "Nanga",
                    "Nkomane",
                    "Rubare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatagara",
                  "villages": [
                    "Bikereri",
                    "Budacya",
                    "Gatwe",
                    "Gisunzu",
                    "Karambi",
                    "Kinanira",
                    "Muvure"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gihirwa",
                  "villages": [
                    "Biseke",
                    "Gifumba",
                    "Kanombe",
                    "Nyagasozi",
                    "Rugarambiro",
                    "Rurambo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kadahenda",
                  "villages": [
                    "Bukongora",
                    "Gakoma",
                    "Gihira",
                    "Karandaryi",
                    "Kivunja",
                    "Muremure",
                    "Mwiyanike",
                    "Nkomane",
                    "Nyaburaro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karengera",
                  "villages": [
                    "Hanika",
                    "Kirwa",
                    "Mashyuza",
                    "Remera",
                    "Ruyebe",
                    "Rwumuyaga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kintobo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatovu",
                  "villages": [
                    "Gatovu Centre",
                    "Giharo",
                    "Nyagitaba",
                    "Nyarusekera",
                    "Rubande"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kintobo",
                  "villages": [
                    "Bikingi",
                    "Gakoro",
                    "Gasura",
                    "Gasyo",
                    "Kansesa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagisozi",
                  "villages": [
                    "Dehero",
                    "Hungiro",
                    "Nyanshundura",
                    "Rutoyi",
                    "Sinayi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamugari",
                  "villages": [
                    "Kabagundu",
                    "Kariyeri",
                    "Karucuranya",
                    "Kiyumba",
                    "Kizunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukondo",
                  "villages": ["Kamanga", "Kankima", "Kimpundu", "Mugogo"]
                },
                {
                  "type": "CELLS",
                  "name": "Ryinyo",
                  "villages": [
                    "Gahwege",
                    "Gasenyi",
                    "Humiro",
                    "Kabashumba Centre",
                    "Kadaterurwa",
                    "Kirwa",
                    "Rwamikeri"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mukamira",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasizi",
                  "villages": ["Kamiro", "Sasangabo"]
                },
                {
                  "type": "CELLS",
                  "name": "Jaba",
                  "villages": [
                    "Biriba",
                    "Butondwe",
                    "Gisenyi",
                    "Hesha",
                    "Nyirabashenyi",
                    "Rwanyirangeni"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanyove",
                  "villages": ["Kabere", "Kanyove", "Musumba", "Rwaseka"]
                },
                {
                  "type": "CELLS",
                  "name": "Rubaya",
                  "villages": [
                    "Cyivugiza",
                    "Gashonero",
                    "Kaburende",
                    "Karandaryi",
                    "Kinyababa",
                    "Rwamikeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugeshi",
                  "villages": [
                    "Cyinkenke",
                    "Cyumukenke",
                    "Kamenyo",
                    "Karama",
                    "Kazibake",
                    "Kazuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukoma",
                  "villages": [
                    "Bihinga",
                    "Gatare",
                    "Gitete",
                    "Pfunda",
                    "Rugaragara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rurengeri",
                  "villages": [
                    "Kabyaza",
                    "Kibugazi",
                    "Maziba",
                    "Rugarambiro",
                    "Rutovu",
                    "Rwankeri"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muringa",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gisizi",
                  "villages": [
                    "Kabyuma",
                    "Kinihira",
                    "Kinyasenge",
                    "Munini",
                    "Muremure"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mulinga",
                  "villages": [
                    "Bunywero",
                    "Gakamba",
                    "Gora",
                    "Kamazage",
                    "Kiruma",
                    "Kivugiza",
                    "Migongo",
                    "Ruganda",
                    "Rurambo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwiyanike",
                  "villages": [
                    "Gitebe",
                    "Kayanza",
                    "Kivuruga",
                    "Mucundebo",
                    "Musaraba",
                    "Nyankukuma",
                    "Ryamwana",
                    "Ryanyirandaba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkomane",
                  "villages": [
                    "Kamajanga",
                    "Kigusa",
                    "Kinaba",
                    "Mabare",
                    "Muremure"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamasheke",
                  "villages": [
                    "Bambiro",
                    "Kanwiri",
                    "Muyange",
                    "Nyamasheke",
                    "Rubare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwantobo",
                  "villages": [
                    "Gasura",
                    "Karambi",
                    "Musenyi",
                    "Ntango",
                    "Rurembo",
                    "Rwandarugari"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rambura",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Birembo",
                  "villages": [
                    "Birembo",
                    "Cyugi",
                    "Kimisebeya",
                    "Mariba",
                    "Munyangari",
                    "Nyavuvu",
                    "Rugarambiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Guriro",
                  "villages": [
                    "Cyanika",
                    "Kimisebeya",
                    "Nteko",
                    "Nyanguragura",
                    "Raro",
                    "Rusogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibisabo",
                  "villages": [
                    "Bugonde",
                    "Gatare",
                    "Kabeza",
                    "Karambi",
                    "Kinihira",
                    "Nyampuhu",
                    "Rwenzo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mutaho",
                  "villages": [
                    "Bihangara",
                    "Bukinanyana",
                    "Kiraza",
                    "Murambi",
                    "Nyiragikokora",
                    "Rusekera",
                    "Rutazigurwa",
                    "Sukiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyundo",
                  "villages": [
                    "Gasiza",
                    "Kamifuho",
                    "Myumba",
                    "Nama",
                    "Ntagihendo",
                    "Nyempanika",
                    "Rusereka",
                    "Rwinkingi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugamba",
                  "villages": [
                    "Giharo",
                    "Kamiro",
                    "Kibumbiro",
                    "Muturagara",
                    "Muturirwa",
                    "Nkomane"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rugera",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gakoro",
                  "villages": [
                    "Bweru",
                    "Kintore",
                    "Mubuga",
                    "Nyakigezi",
                    "Nyarubingo",
                    "Nyarusange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Marangara",
                  "villages": [
                    "Bwumba",
                    "Gasayo",
                    "Gasiza",
                    "Giko",
                    "Kabahendanyi",
                    "Kagano",
                    "Nyagasozi",
                    "Rwangege",
                    "Tetero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagahondo",
                  "villages": [
                    "Buhete",
                    "Gitotsi",
                    "Kabyaza",
                    "Muhare",
                    "Munyinya",
                    "Musenyi",
                    "Nganzo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarutembe",
                  "villages": [
                    "Gatyazo",
                    "Gisenyi",
                    "Jari",
                    "Kamenyo",
                    "Kibumba",
                    "Kirebe",
                    "Mwambi",
                    "Nyamugari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rurembo",
                  "villages": [
                    "Bihe",
                    "Bukango",
                    "Cyasenge",
                    "Gahama",
                    "Gaseke",
                    "Gihuri",
                    "Karambi",
                    "Murama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Tyazo",
                  "villages": [
                    "Harabana",
                    "Kabuye",
                    "Kingona",
                    "Kiyanza",
                    "Mucaca",
                    "Murengeri",
                    "Nyakiriba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rurembo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gahondo",
                  "villages": [
                    "Bihira",
                    "Gahoko",
                    "Gitega",
                    "Kamahwera",
                    "Kanama",
                    "Kazuba",
                    "Murungu",
                    "Musenyi",
                    "Rugendabari",
                    "Rwamigega"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitega",
                  "villages": [
                    "Bukangano",
                    "Cyanika",
                    "Cyivugiza",
                    "Cyuve",
                    "Gitega",
                    "Kagusa",
                    "Rurambo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kirimbogo",
                  "villages": [
                    "Cyayu",
                    "Cyinkware",
                    "Cyogo",
                    "Gabiro",
                    "Gasenyi",
                    "Karuhara",
                    "Kinaba",
                    "Nturo",
                    "Nturoy Inkoko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": [
                    "Bugeshi",
                    "Gahondo",
                    "Gisoro",
                    "Kabyaza",
                    "Karambi",
                    "Karuhindu",
                    "Kidomo",
                    "Mpinga",
                    "Muremure",
                    "Nyarukangaga",
                    "Rubavu",
                    "Rubona I"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwana",
                  "villages": [
                    "Busenge",
                    "Kamugarura",
                    "Karukungu",
                    "Murama",
                    "Mwana",
                    "Nemba",
                    "Nyagahangara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwaza",
                  "villages": [
                    "Gatobo",
                    "Gifunzo",
                    "Kabutozi",
                    "Kamenyo I",
                    "Kamenyo II",
                    "Muhungwe",
                    "Murama",
                    "Musekera",
                    "Musenyi",
                    "Musezero",
                    "Muturagara",
                    "Rubona II",
                    "Rugarambiro",
                    "Rugote",
                    "Rwanika",
                    "Tubuye"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Shyira",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyimanzovu",
                  "villages": [
                    "Bihembe",
                    "Cyinyana",
                    "Kabuga",
                    "Mugwato",
                    "Murikwa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanyamitana",
                  "villages": [
                    "Kamahoro",
                    "Kazirankara",
                    "Kibuye",
                    "Kigabiro",
                    "Mataba",
                    "Rubaba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kintarure",
                  "villages": [
                    "Kabagabo",
                    "Kabuguzo",
                    "Mabare",
                    "Munanira",
                    "Remera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mpinga",
                  "villages": [
                    "Gacurabwenge",
                    "Kagongo",
                    "Mukaka",
                    "Rwabahungu",
                    "Vunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mutanda",
                  "villages": ["Kaziba", "Kidandari", "Murambi", "Ntende"]
                },
                {
                  "type": "CELLS",
                  "name": "Shaki",
                  "villages": [
                    "Gitega",
                    "Kabuga",
                    "Karambi",
                    "Kirwa",
                    "Kiyovu",
                    "Rutoyi"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Nyamasheke",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Bushekeri",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buvungira",
                  "villages": [
                    "Buhinga",
                    "Bushekeri",
                    "Buvungira",
                    "Gasebeya",
                    "Gisakura",
                    "Kinzovu",
                    "Mujabagiro",
                    "Nkenga",
                    "Ruvumbu",
                    "Rwumba",
                    "Winkamba",
                    "Yove"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mpumbu",
                  "villages": [
                    "Bona",
                    "Gahondo",
                    "Kamina",
                    "Karambi",
                    "Kirombozi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngoma",
                  "villages": [
                    "Bitare",
                    "Buhembe",
                    "Bukiro",
                    "Cyeshero",
                    "Kagarama",
                    "Kanyovu",
                    "Mashuhira",
                    "Rugeregere"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarusange",
                  "villages": [
                    "Butangata",
                    "Gatoki",
                    "Kinini",
                    "Mubuga",
                    "Nyanza",
                    "Rundwe",
                    "Rweza"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Bushenge",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasheke",
                  "villages": [
                    "Bagiramenyo",
                    "Biguzi",
                    "Bugungu",
                    "Gasheke",
                    "Gikombe",
                    "Gitwa",
                    "Kamayenga",
                    "Kamucyamo",
                    "Karambo",
                    "Kigenge",
                    "Kivoga",
                    "Nyamikingo",
                    "Rwashyamba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Impala",
                  "villages": [
                    "Birava",
                    "Buninda",
                    "Bushenge",
                    "Gasharu",
                    "Gasumo",
                    "Kabeza",
                    "Mucuzi",
                    "Rumanga",
                    "Runyinya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagatamu",
                  "villages": [
                    "Gashirabwoba",
                    "Gasura",
                    "Gatare",
                    "Kagatamu",
                    "Karunga",
                    "Kidashira",
                    "Maherero",
                    "Ruhinamavi",
                    "Ruhinga I",
                    "Ruhinga II"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karusimbi",
                  "villages": [
                    "Gahongo",
                    "Gakombe",
                    "Gasharu",
                    "Karusimbi",
                    "Kasenjara",
                    "Kigaga",
                    "Nyakagezi",
                    "Remera",
                    "Rwumuyaga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Cyato",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bisumo",
                  "villages": [
                    "Gasasa",
                    "Hangari",
                    "Kabuga",
                    "Kayo",
                    "Munini",
                    "Mutuntu",
                    "Rugabe",
                    "Rugarama",
                    "Ruhengeri",
                    "Rwaramba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": [
                    "Bigeyo",
                    "Cyato",
                    "Kamonyi",
                    "Karehe",
                    "Matyazo",
                    "Muhingo",
                    "Muremure",
                    "Murenge",
                    "Mutiti",
                    "Nkomero",
                    "Nyakabingo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mutongo",
                  "villages": [
                    "Bwanama",
                    "Kavumu",
                    "Kizinga",
                    "Muyugiri",
                    "Rushahaga",
                    "Rusi",
                    "Rutiritiri",
                    "Yove"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugari",
                  "villages": [
                    "Gakenke",
                    "Gashihe",
                    "Gituntu",
                    "Karambo",
                    "Ntsinduka",
                    "Rubeho",
                    "Rwumba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gihombo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Butare",
                  "villages": [
                    "Butare",
                    "Gahanda",
                    "Gasharu",
                    "Mbogo",
                    "Nyakabungo",
                    "Rugaragara",
                    "Rwamatamu",
                    "Rwatsi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitwa",
                  "villages": [
                    "Birehe",
                    "Bwerankori",
                    "Doga",
                    "Gasagara",
                    "Gaseke",
                    "Gasharu",
                    "Kinanira",
                    "Nyagahinga",
                    "Ruboreza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Jarama",
                  "villages": [
                    "Bigabiro",
                    "Buseso",
                    "Kadobogo",
                    "Karehe",
                    "Kibirizi",
                    "Ruvumbu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kibingo",
                  "villages": [
                    "Gituruka",
                    "Kigarama",
                    "Mataba",
                    "Nyabitare",
                    "Nyarunyinya",
                    "Rushoka",
                    "Rusuzumiro",
                    "Rwabisindu",
                    "Rwanyundo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": [
                    "Bungo",
                    "Butembo",
                    "Mubuga",
                    "Muhavu",
                    "Muhororo",
                    "Ruhingo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kagano",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gako",
                  "villages": [
                    "Bagarama",
                    "Gasharu",
                    "Gitwa",
                    "Kazibira",
                    "Mpombo",
                    "Musagara",
                    "Remera",
                    "Rushondi",
                    "Rwangoma",
                    "Rwisovu",
                    "Ryarutungura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mubumbano",
                  "villages": [
                    "Bisoro",
                    "Gikomero",
                    "Gitanga",
                    "Kabagabo",
                    "Kabuyekeru",
                    "Mabungo",
                    "Makoko",
                    "Mikingo",
                    "Murambi",
                    "Nyagashinge",
                    "Nyamirambo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ninzi",
                  "villages": [
                    "Gasayo",
                    "Gikuyu",
                    "Kavune",
                    "Mujabagiro",
                    "Murwa",
                    "Ninzi",
                    "Nyabageni",
                    "Rugabano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwesero",
                  "villages": [
                    "Gasharu",
                    "Gitaba",
                    "Kamasera",
                    "Kijibamba",
                    "Kirehe",
                    "Mutusa",
                    "Rwesero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shara",
                  "villages": [
                    "Byahi",
                    "Gahumba",
                    "Gihinga",
                    "Gisunzu",
                    "Kaduha",
                    "Kamabuye",
                    "Kamina",
                    "Kibare",
                    "Matara",
                    "Mugohe",
                    "Murambi",
                    "Ntumba",
                    "Rambira"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kanjongo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kibogora",
                  "villages": [
                    "Bizenga",
                    "Gataba",
                    "Kabuyaga",
                    "Kagarama",
                    "Kivugiza",
                    "Maseka",
                    "Munini",
                    "Nyagacaca",
                    "Nyarusange",
                    "Nyenyeri",
                    "Rwakagaju"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigarama",
                  "villages": [
                    "Gakomeye",
                    "Gatare",
                    "Gisagara",
                    "Gitwa",
                    "Kajumiro",
                    "Karambi",
                    "Karehe",
                    "Murambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigoya",
                  "villages": [
                    "Bujanga",
                    "Kabaga",
                    "Kigugu",
                    "Kirambo",
                    "Museke",
                    "Nkero",
                    "Ruganzu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Raro",
                  "villages": [
                    "Baraguma",
                    "Gasihe",
                    "Gasumo",
                    "Kamabuye",
                    "Kamina",
                    "Musasa",
                    "Rambura",
                    "Rugeyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Susa",
                  "villages": [
                    "Gakenke",
                    "Gatebe",
                    "Kamuramira",
                    "Kibazi",
                    "Marongi",
                    "Nyarubura",
                    "Ruganda",
                    "Wamugeyo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Karambi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasovu",
                  "villages": [
                    "Bitare",
                    "Gasamba",
                    "Gikangaga",
                    "Gitwa",
                    "Kabeza",
                    "Murambi",
                    "Nyarugenge",
                    "Rurembo",
                    "Ryanyagahangara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitwe",
                  "villages": [
                    "Giti",
                    "Gitwe",
                    "Kamina",
                    "Karongi",
                    "Kibiko",
                    "Mburabuturo",
                    "Rubingo",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Bugarama",
                    "Gaseke",
                    "Kamukiza",
                    "Kanombe",
                    "Mugohe",
                    "Munini",
                    "Nyabitare",
                    "Nyarusovu",
                    "Rugano",
                    "Rutiti"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagarama",
                  "villages": [
                    "Bizimba",
                    "Cyankuba",
                    "Gituntu",
                    "Kabingo",
                    "Kamagese",
                    "Karambo",
                    "Misirimbo",
                    "Rubona",
                    "Tetero",
                    "Wibungo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rushyarara",
                  "villages": [
                    "Amizero",
                    "Cyivugiza",
                    "Kageyo",
                    "Nkomero",
                    "Rubyiruko",
                    "Rudaga",
                    "Ruzibira",
                    "Rwunamuka",
                    "Tyazo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Karengera",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasayo",
                  "villages": [
                    "Gitwa",
                    "Muganza",
                    "Nyamugari",
                    "Nyamurira",
                    "Rubona"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gashashi",
                  "villages": [
                    "Kabuye",
                    "Kanenge",
                    "Karangiro",
                    "Mwiyando",
                    "Rwinkuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Higiro",
                  "villages": [
                    "Gihaya",
                    "Gitunda",
                    "Mpinga",
                    "Muhora",
                    "Rujeberi",
                    "Rukunguri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Miko",
                  "villages": [
                    "Boli",
                    "Kabisheshe",
                    "Karehe",
                    "Mbanda",
                    "Nyabwinshi",
                    "Nyagisozi",
                    "Nyamiyaga",
                    "Rutare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwezi",
                  "villages": [
                    "Gakeri",
                    "Gatagara",
                    "Kamanu",
                    "Nyagafunzo",
                    "Nyagashikura",
                    "Nyarusange",
                    "Ruhabwa",
                    "Ruhinga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kirimbi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyimpindu",
                  "villages": [
                    "Buha",
                    "Gitwa",
                    "Kamatare",
                    "Katabaro",
                    "Rugeregere",
                    "Uwakibaba",
                    "Uwamuduru",
                    "Uwamugisha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karengera",
                  "villages": [
                    "Gisenyi",
                    "Kabuga",
                    "Kaburiro",
                    "Karambi",
                    "Mitanga",
                    "Mukoto",
                    "Nduba",
                    "Rubumba",
                    "Rugote"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhororo",
                  "villages": [
                    "Gabiro",
                    "Gacumbi",
                    "Giseke",
                    "Gisesero",
                    "Kigarama",
                    "Nyagacaca",
                    "Nyakabingo",
                    "Rusebeya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarusange",
                  "villages": [
                    "Bunyamanza",
                    "Gisheke",
                    "Gitsimbwe",
                    "Mushungo",
                    "Nyabinaga",
                    "Rubona",
                    "Rwamiko"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Macuba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatare",
                  "villages": [
                    "Buhoro",
                    "Gaseke",
                    "Gasharu",
                    "Gashwi",
                    "Kabeza",
                    "Kayenzi",
                    "Murama",
                    "Nyakabingo",
                    "Rugarama",
                    "Ryasagahara",
                    "Wimana",
                    "Wingabe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mutongo",
                  "villages": [
                    "Kamina",
                    "Kanyenkondo",
                    "Karamba",
                    "Nyabihanga",
                    "Rupango",
                    "Ryagatari",
                    "Ryarugamba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakabingo",
                  "villages": [
                    "Kajumiro",
                    "Kanyege",
                    "Mataba",
                    "Musumba",
                    "Mwasa",
                    "Nyarunombe",
                    "Rugote",
                    "Rumamfu",
                    "Rwankuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugari",
                  "villages": [
                    "Bitaba",
                    "Bunyamanza",
                    "Butare",
                    "Gatyazo",
                    "Gitwa",
                    "Kabuga",
                    "Kazimba",
                    "Kirehe",
                    "Matare",
                    "Munimba",
                    "Nyakariba",
                    "Rusozi",
                    "Rutaragwe",
                    "Rwambogo",
                    "Rwamiko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Vugangoma",
                  "villages": [
                    "Bitega",
                    "Bizi",
                    "Cyijima",
                    "Kagarama",
                    "Kigandi",
                    "Kirambira",
                    "Nkuro",
                    "Nyagahinga",
                    "Nyarusange",
                    "Wisovu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mahembe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gisoke",
                  "villages": [
                    "Fumba",
                    "Giko",
                    "Gisebeya",
                    "Kamashinge",
                    "Kanyoni",
                    "Kivumu",
                    "Muramba",
                    "Nyabumera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagarama",
                  "villages": [
                    "Gabiro",
                    "Gasharu",
                    "Giti",
                    "Kanombe",
                    "Kigara",
                    "Mikingo",
                    "Nyamiheha",
                    "Ruhanga",
                    "Rukaragata"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagatare",
                  "villages": [
                    "Gatare",
                    "Karambo",
                    "Kizenga",
                    "Murundo",
                    "Nyagahima",
                    "Nyakabande",
                    "Uwamaheke"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakavumu",
                  "villages": [
                    "Bigali",
                    "Bisharara",
                    "Bungo",
                    "Cyinjira",
                    "Cyiya",
                    "Gitwa",
                    "Nyarusiza"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyabitekeri",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kigabiro",
                  "villages": [
                    "Bunyenga",
                    "Butsure",
                    "Cyamuti",
                    "Kabarore",
                    "Kamahongo",
                    "Kigarama",
                    "Mariba",
                    "Murambi",
                    "Ruginga",
                    "Rweru"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kinunga",
                  "villages": [
                    "Gahwazi",
                    "Gasebeya",
                    "Gashashi",
                    "Kabanda",
                    "Kagarama",
                    "Karambi",
                    "Kibanda",
                    "Mukarange",
                    "Muremure",
                    "Rugarama",
                    "Shenyeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mariba",
                  "villages": [
                    "Buhinga",
                    "Gahuhezi",
                    "Gakoma",
                    "Kabacuzi",
                    "Kabukunzi",
                    "Kamabera",
                    "Kamuhoza",
                    "Karango",
                    "Mataba",
                    "Murenge",
                    "Nyarusange"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muyange",
                  "villages": [
                    "Buhokoro",
                    "Bukiro",
                    "Bukuri",
                    "Gafunzo",
                    "Gahabwa",
                    "Gikombe",
                    "Kazibo",
                    "Nyange",
                    "Taba",
                    "Tundwe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ntango",
                  "villages": [
                    "Bugiga",
                    "Buhinga",
                    "Kankoni",
                    "Kanombe",
                    "Kayenzi",
                    "Murambi",
                    "Nyamirundi",
                    "Rebero",
                    "Ruhonga",
                    "Taba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rangiro",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Banda",
                  "villages": [
                    "Bururi",
                    "Gahira",
                    "Gasumo",
                    "Nkamba",
                    "Uwakagano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gakenke",
                  "villages": [
                    "Gahisi",
                    "Gasovu",
                    "Kamatsira",
                    "Ruhana",
                    "Rwasa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Jurwe",
                  "villages": [
                    "Gasebeya",
                    "Gatagara",
                    "Kaneke",
                    "Kibavu",
                    "Rudehero",
                    "Rugomero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": [
                    "Bigeyo",
                    "Bunyenyezi",
                    "Munini",
                    "Murambi",
                    "Nyakabingo",
                    "Nyarwungo",
                    "Ryarubasha"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ruharambuga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kanazi",
                  "villages": [
                    "Gashwati",
                    "Gitaba",
                    "Kadashya",
                    "Kamuhumuza",
                    "Karambo",
                    "Rubiha",
                    "Rukerereza",
                    "Rusambu",
                    "Rwamahwa",
                    "Ryamashuri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ntendezi",
                  "villages": [
                    "Gasharu",
                    "Kacyiru",
                    "Kagarama",
                    "Kamabuye",
                    "Kamonyi",
                    "Karambi",
                    "Kigabiro",
                    "Kigenge",
                    "Muko",
                    "Nganzo",
                    "Risansi",
                    "Rukoma",
                    "Wimpundu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Save",
                  "villages": [
                    "Bigutu",
                    "Gihinga",
                    "Giko",
                    "Kanyovu",
                    "Manzi",
                    "Munini",
                    "Nkomero",
                    "Nyamuhunga",
                    "Save"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Wimana",
                  "villages": [
                    "Gacyamo",
                    "Gakomeye",
                    "Gasumo",
                    "Gatanga",
                    "Gikundamvura",
                    "Kabusunzu",
                    "Kamudende",
                    "Mpinga",
                    "Murambi",
                    "Ngoboka",
                    "Nkomero",
                    "Nyarushwati",
                    "Rugabano",
                    "Rumuna",
                    "Ryangange"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Shangi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Burimba",
                  "villages": [
                    "Busangati",
                    "Gikombe",
                    "Kabahande",
                    "Nyakagano",
                    "Nyakibingo",
                    "Rubayi",
                    "Rukohwa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mataba",
                  "villages": [
                    "Gabiro",
                    "Gasumo",
                    "Mataba",
                    "Mpishyi",
                    "Ruzinga",
                    "Rwabagoyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mugera",
                  "villages": [
                    "Bweranyange",
                    "Karugero",
                    "Karuhatana",
                    "Karuhigi",
                    "Kavo",
                    "Rwonga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamugari",
                  "villages": [
                    "Amahoro",
                    "Bitaba",
                    "Kabare",
                    "Mpande",
                    "Nyamateke",
                    "Nyamihondo",
                    "Rubavu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shangi",
                  "villages": [
                    "Bugomba",
                    "Busasamana",
                    "Gasharu",
                    "Kabere",
                    "Karambo",
                    "Ngoboka",
                    "Taba"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Rubavu",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Bugeshi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buringo",
                  "villages": [
                    "Bugeshi",
                    "Buringo",
                    "Butaka",
                    "Gaharawe",
                    "Gahira",
                    "Jenda",
                    "Mutegengeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Butaka",
                  "villages": [
                    "Akabajara",
                    "Akimitoni",
                    "Gaheriheri",
                    "Kabingo",
                    "Kinyamuhanga",
                    "Muremure"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Hehu",
                  "villages": [
                    "Bereshi",
                    "Bweramana",
                    "Gasizi",
                    "Gitotoma",
                    "Hangari",
                    "Humure",
                    "Kabeza",
                    "Ngando"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabumba",
                  "villages": [
                    "Bonde",
                    "Bugeshi",
                    "Gashaka",
                    "Gatovu",
                    "Gihira",
                    "Kabumba",
                    "Mweya",
                    "Ryarukara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mutovu",
                  "villages": [
                    "Bigaragara",
                    "Bugeshi",
                    "Kabuhanga",
                    "Kimpongo",
                    "Mburamazi",
                    "Rindiro",
                    "Vuna"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nsherima",
                  "villages": [
                    "Batikoti",
                    "Bipfura",
                    "Bweza",
                    "Cyumba",
                    "Gaheriheri",
                    "Murangara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusiza",
                  "villages": [
                    "Bihe",
                    "Bunjuri",
                    "Kabarore",
                    "Kitagabwa",
                    "Nyacyonga",
                    "Ryarugamba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Busasamana",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gacurabwenge",
                  "villages": [
                    "Biziguro",
                    "Bukumu",
                    "Busanganya",
                    "Gakomero",
                    "Kamuyenzi",
                    "Kanondo",
                    "Kanyabijumba",
                    "Nyamyenge",
                    "Nyarubuye",
                    "Nyarusozi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gasiza",
                  "villages": [
                    "Bunyogwe",
                    "Gisura",
                    "Kibavu",
                    "Kinyababa",
                    "Kinyandaro",
                    "Kiraro",
                    "Mashinga",
                    "Munanira",
                    "Nyarunembwe",
                    "Rwagare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gihonga",
                  "villages": ["Marumba", "Mubona", "Nyamyumba", "Sabushengo"]
                },
                {
                  "type": "CELLS",
                  "name": "Kageshi",
                  "villages": [
                    "Gasenyi",
                    "Kigezi",
                    "Mufumba",
                    "Ruhara",
                    "Rwamigega",
                    "Rwankuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Makoro",
                  "villages": [
                    "Gakuta",
                    "Hanika",
                    "Kamuzamuzi",
                    "Karambi",
                    "Kidadi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyacyonga",
                  "villages": [
                    "Cyanika",
                    "Kacyiru",
                    "Kamiro",
                    "Kingogo",
                    "Kitagabwa",
                    "Nyarurembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusura",
                  "villages": [
                    "Cyamabuye",
                    "Kabagoyi",
                    "Kageyo",
                    "Kambonyi",
                    "Kamivumba",
                    "Kinogo",
                    "Munege",
                    "Rebero"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Cyanzarwe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Busigari",
                  "villages": ["Bisizi", "Bugu", "Kanembwe", "Rwashungwe"]
                },
                {
                  "type": "CELLS",
                  "name": "Cyanzarwe",
                  "villages": [
                    "Butango",
                    "Cyanzarwe",
                    "Gasenyi",
                    "Karangara",
                    "Kiruhura",
                    "Rushura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gora",
                  "villages": ["Burima", "Gora", "Kabere"]
                },
                {
                  "type": "CELLS",
                  "name": "Kinyanzovu",
                  "villages": ["Bushanga", "Kanyentambi", "Kibaya", "Muhororo"]
                },
                {
                  "type": "CELLS",
                  "name": "Makurizo",
                  "villages": [
                    "Gashuha",
                    "Makurizo",
                    "Mukingo",
                    "Nyamugari",
                    "Ruhuranda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwangara",
                  "villages": [
                    "Buramazi",
                    "Hanika",
                    "Muti",
                    "Nyakabanda",
                    "Nyakabungo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwanzekuma",
                  "villages": [
                    "Kabirizi",
                    "Karambi",
                    "Kinyamiyaga",
                    "Munaba",
                    "Rukorakore"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ryabizige",
                  "villages": [
                    "Burere",
                    "Kanyamagare",
                    "Kavumu",
                    "Muhuhuri",
                    "Musene",
                    "Nganzo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gisenyi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Amahoro",
                  "villages": [
                    "Amahoro",
                    "Isangano",
                    "Kitagabwa",
                    "Muhabura",
                    "Murakazaneza",
                    "Murisanga",
                    "Terimbere",
                    "Umunezero",
                    "Urugwiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bugoyi",
                  "villages": [
                    "Amataba",
                    "Bugoyi",
                    "Giraneza",
                    "Irakiza",
                    "Isangano",
                    "Ituze",
                    "Kaminuza",
                    "Nyakabungo",
                    "Ubutabera",
                    "Ubwiza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kivumu",
                  "villages": [
                    "Giponda",
                    "Igisubizo",
                    "Itangazamakuru",
                    "Karisimbi",
                    "Kivumu",
                    "Muduha",
                    "Murisanga",
                    "Ubukerarugendo",
                    "Ubumwe",
                    "Ubutabazi",
                    "Umurava",
                    "Urumuri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mbugangari",
                  "villages": [
                    "Abahuje",
                    "Amajyambere",
                    "Gasutamo",
                    "Haguruka",
                    "Icyinyambo",
                    "Ihumure",
                    "Ikaze",
                    "Ikibuga",
                    "Inkurunziza",
                    "Iyobokamana",
                    "Karundo",
                    "Nyarubande",
                    "Rebero",
                    "Uburanga",
                    "Uburezi",
                    "Ubwiyunge",
                    "Umubano",
                    "Umutekano"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nengo",
                  "villages": [
                    "Gacuba",
                    "Gikarani",
                    "Kivu",
                    "Nyabagobe",
                    "Nyaburanga",
                    "Ubucuruzi",
                    "Urubyiruko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubavu",
                  "villages": [
                    "Gahojo",
                    "Kamayugi",
                    "Kanyarutambi",
                    "Munini",
                    "Rubavu",
                    "Ruliba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Umuganda",
                  "villages": [
                    "Bonde",
                    "Dukore",
                    "Ihuriro",
                    "Kabuga",
                    "Majengo",
                    "Muhato",
                    "Umucyo",
                    "Umuganda",
                    "Umunyinya"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kanama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kamuhoza",
                  "villages": [
                    "Bambiro",
                    "Kagarama",
                    "Nyamigogo",
                    "Nyanshundura",
                    "Rukoro",
                    "Rwankomo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambo",
                  "villages": ["Gahunga", "Mariba", "Mutanda", "Ndongoshori"]
                },
                {
                  "type": "CELLS",
                  "name": "Mahoko",
                  "villages": [
                    "Bikuka",
                    "Kabeza",
                    "Kabindi",
                    "Kanama",
                    "Kara",
                    "Mahoko",
                    "Nyagasozi",
                    "Nyamirambo",
                    "Nyamugari",
                    "Nyamuremure",
                    "Rubare",
                    "Shusho"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Musabike",
                  "villages": [
                    "Kabingo",
                    "Kagano",
                    "Kaje",
                    "Nteranya",
                    "Nyakibande",
                    "Ryamibungo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkomane",
                  "villages": [
                    "Gashasho",
                    "Gatsina",
                    "Nkomane",
                    "Nyabishongo",
                    "Rwanzuki"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusongati",
                  "villages": [
                    "Busesa",
                    "Gihurizo",
                    "Kabere",
                    "Kibuga",
                    "Mashyoza",
                    "Muvebwa",
                    "Nyabitunda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Yungwe",
                  "villages": [
                    "Bwikurure",
                    "Gikomero",
                    "Rugege",
                    "Rugogwe",
                    "Rutagara",
                    "Yungwe"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kanzenze",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kanyirabigogo",
                  "villages": ["Giramata", "Kabana", "Mizingo", "Murambi"]
                },
                {
                  "type": "CELLS",
                  "name": "Kirerema",
                  "villages": ["Bisesero", "Kirerema", "Rushasho"]
                },
                {
                  "type": "CELLS",
                  "name": "Muramba",
                  "villages": ["Kanya", "Muramba", "Rubara", "Tubindi"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamikongi",
                  "villages": [
                    "Cyivugiza",
                    "Kabari",
                    "Nyamikongi",
                    "Rwamikungu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamirango",
                  "villages": ["Gasizi", "Mareru", "Mizingo", "Nyamirango"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyaruteme",
                  "villages": ["Kabere", "Karagarago", "Rugali"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mudende",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bihungwe",
                  "villages": [
                    "Bihungwe",
                    "Bivumu",
                    "Bunyove",
                    "Mwirima",
                    "Rukeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanyundo",
                  "villages": [
                    "Gahanika",
                    "Mugongo",
                    "Murambi",
                    "Mutura",
                    "Nyamirama",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Micinyiro",
                  "villages": [
                    "Gasiza",
                    "Kanombe",
                    "Kanyamitura",
                    "Micinyiro",
                    "Nyagisozi",
                    "Tetero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mirindi",
                  "villages": ["Gasumba", "Kiryoha", "Mirindi", "Tamira"]
                },
                {
                  "type": "CELLS",
                  "name": "Ndoranyi",
                  "villages": [
                    "Gaharawe",
                    "Gikuyu",
                    "Gitega",
                    "Karandaryi",
                    "Kinyangwe",
                    "Nyabishongo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rungu",
                  "villages": [
                    "Bihe",
                    "Gahenerezo",
                    "Ndiza",
                    "Rungu",
                    "Rwangara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwanyakayaga",
                  "villages": [
                    "Kabunoni",
                    "Muyange",
                    "Nangurubibi",
                    "Nyamugari"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyakiriba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bisizi",
                  "villages": [
                    "Bweza",
                    "Gisangani",
                    "Kamakinga",
                    "Kibuye",
                    "Kingoma",
                    "Mwumba",
                    "Nyamwishyura",
                    "Runaba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gikombe",
                  "villages": [
                    "Kitarimwa",
                    "Nyabibuye",
                    "Nyabirezi",
                    "Nyakibande",
                    "Rugerero",
                    "Rushubi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanyefurwe",
                  "villages": [
                    "Kayove",
                    "Kiyovu",
                    "Muhira",
                    "Nyakabungo",
                    "Rebero",
                    "Rukoro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarushyamba",
                  "villages": [
                    "Bazirete",
                    "Kivumu",
                    "Makoro",
                    "Nyonirima",
                    "Ruhangiro",
                    "Runyeheri",
                    "Ruvuzananga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyamyumba",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Burushya",
                  "villages": [
                    "Kaberamo",
                    "Kabuyekera",
                    "Karuvugiro",
                    "Muhingo",
                    "Mutembe",
                    "Nganzo",
                    "Wintwari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Busoro",
                  "villages": [
                    "Bugoma",
                    "Buhanga",
                    "Bujenje",
                    "Bushagi",
                    "Buvano",
                    "Gateko",
                    "Kabushongo",
                    "Kanajana",
                    "Kiguri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kinigi",
                  "villages": [
                    "Burevu",
                    "Byima",
                    "Gatyazo",
                    "Karambi",
                    "Nyabisusa",
                    "Nyamiko",
                    "Pfunda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiraga",
                  "villages": [
                    "Buhogo",
                    "Bukiro",
                    "Kigufi",
                    "Mukondo",
                    "Nyaruhonga",
                    "Rambo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Munanira",
                  "villages": [
                    "Bugarura",
                    "Busumba",
                    "Cyeya",
                    "Kabakora",
                    "Nyamirambo",
                    "Rebero",
                    "Ruhondo",
                    "Shusho"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubona",
                  "villages": [
                    "Bugasha",
                    "Buharara",
                    "Bunyago",
                    "Burima",
                    "Butotori",
                    "Kabiza",
                    "Kabuyekera",
                    "Remera",
                    "Rurembo",
                    "Rushagara",
                    "Tagaza"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyundo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bahimba",
                  "villages": [
                    "Bahimba",
                    "Buhozi",
                    "Gatuntu",
                    "Kagera",
                    "Kanyiraruhindu",
                    "Ngege",
                    "Rurembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatovu",
                  "villages": [
                    "Budaha",
                    "Busheru",
                    "Cyima",
                    "Kanyahene",
                    "Murambi",
                    "Ruhanga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kavomo",
                  "villages": [
                    "Bahimba",
                    "Burambo",
                    "Gitwa",
                    "Kavumu",
                    "Kinihira",
                    "Kinyendaro",
                    "Shonyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigarama",
                  "villages": [
                    "Busesa",
                    "Kazabe",
                    "Mwali",
                    "Ndamiye",
                    "Rukore",
                    "Rwantobo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mukondo",
                  "villages": [
                    "Buroha",
                    "Busogo",
                    "Byiniro",
                    "Cyungeri",
                    "Kabitongo",
                    "Kanyamisuku",
                    "Kashumba",
                    "Nkora",
                    "Remera",
                    "Tanda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyundo",
                  "villages": [
                    "Birembo",
                    "Gasenyi",
                    "Huye",
                    "Kayanza",
                    "Kiribata",
                    "Kiyove",
                    "Kiziguro",
                    "Nyakagezi",
                    "Rumbati",
                    "Runandi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Terimbere",
                  "villages": [
                    "Gahama",
                    "Hanika",
                    "Kanyamatembe",
                    "Keya",
                    "Nombe",
                    "Rambura",
                    "Ruhango",
                    "Terimbere"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rubavu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buhaza",
                  "villages": ["Dufatanye", "Gabiro", "Murambi"]
                },
                {
                  "type": "CELLS",
                  "name": "Burinda",
                  "villages": [
                    "Akasengore",
                    "Bubaji",
                    "Gasenyi",
                    "Nyabantu",
                    "Nyamwinshi",
                    "Rwezamenyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Byahi",
                  "villages": [
                    "Buhuru",
                    "Isangano",
                    "Mikingo",
                    "Ngugo",
                    "Rurembo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gikombe",
                  "villages": [
                    "Bambiro",
                    "Bushengo I",
                    "Gafuku",
                    "Mubuga",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": [
                    "Bushengo",
                    "Buzuta",
                    "Bwiru",
                    "Kabere II",
                    "Ruvumbu",
                    "Rwangara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murara",
                  "villages": [
                    "Bugesera",
                    "Gahinga",
                    "Gasayo",
                    "Kabere",
                    "Kiroji"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukoko",
                  "villages": [
                    "Bisizi",
                    "Isangano",
                    "Karukogo",
                    "Kitarimwa",
                    "Rutagara"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rugerero",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Basa",
                  "villages": [
                    "Buranga",
                    "Gahinga",
                    "Kabeza",
                    "Kanyukiro",
                    "Mukumya",
                    "Nyaruhengeri",
                    "Tagaza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisa",
                  "villages": [
                    "Gatangare",
                    "Gihira",
                    "Gisa",
                    "Kabashanja",
                    "Kaniga",
                    "Ndobogo",
                    "Rusongati",
                    "Shwemu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabilizi",
                  "villages": [
                    "Amahoro",
                    "Gakoro",
                    "Nkama",
                    "Nyamyiri",
                    "Ruhangiro",
                    "Rukukumbo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhira",
                  "villages": [
                    "Gatebe I",
                    "Gatebe II",
                    "Gitebe I",
                    "Gitebe II",
                    "Kasonga",
                    "Kizi",
                    "Rusamaza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugerero",
                  "villages": [
                    "Kabarora",
                    "Kibaya",
                    "Nyantomvu",
                    "Nyarurembo",
                    "Rukingo",
                    "Ruranga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rushubi",
                  "villages": [
                    "Busheke",
                    "Butangi",
                    "Butumba",
                    "Kabashara",
                    "Kazika",
                    "Kimina",
                    "Muhingo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwaza",
                  "villages": [
                    "Byima",
                    "Cyanika",
                    "Gashovu",
                    "Gateko",
                    "Kiroji",
                    "Mushoko",
                    "Rebero",
                    "Rohero",
                    "Rucyamo",
                    "Rwaza"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Rutsiro",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Boneza",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bushaka",
                  "villages": [
                    "Bikono",
                    "Bugarura",
                    "Gaseke",
                    "Kabirizi",
                    "Kinunu",
                    "Muramba",
                    "Rutagara",
                    "Rwimbogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabihogo",
                  "villages": [
                    "Buhonongo",
                    "Bweramana",
                    "Gashoko",
                    "Kamuyaga",
                    "Rugamba",
                    "Rwabisururu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkira",
                  "villages": [
                    "Gisiza",
                    "Gisoro",
                    "Kabuga",
                    "Karukamba",
                    "Kigarama",
                    "Munanira",
                    "Murambi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Remera",
                  "villages": [
                    "Bigabiro",
                    "Buhoro",
                    "Kaganza",
                    "Kamuzigura",
                    "Kinunga",
                    "Muyange",
                    "Rusororo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gihango",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bugina",
                  "villages": ["Gishushu", "Gitarama", "Kagarama", "Karambi"]
                },
                {
                  "type": "CELLS",
                  "name": "Congo-nil",
                  "villages": [
                    "Kandahura",
                    "Kindoyi",
                    "Mukebera",
                    "Nduba",
                    "Nkwiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mataba",
                  "villages": [
                    "Butare",
                    "Kabeza",
                    "Kamutambiro",
                    "Muyange",
                    "Nganzo",
                    "Terimbere"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": [
                    "Gashihe",
                    "Gatomvu",
                    "Karugaju",
                    "Muhora",
                    "Nyagahinga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruhingo",
                  "villages": ["Gasharu", "Kabuga", "Nyagahinga"]
                },
                {
                  "type": "CELLS",
                  "name": "Shyembe",
                  "villages": [
                    "Gisunzu",
                    "Karambo",
                    "Karongi",
                    "Rugote",
                    "Rwamiyaga",
                    "Shyembe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Teba",
                  "villages": [
                    "Bweramana",
                    "Gasave",
                    "Gateja",
                    "Kanembwe",
                    "Rasaniro"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kigeyo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Buhindure",
                  "villages": [
                    "Burambo",
                    "Bushaka",
                    "Gacaca",
                    "Gaharawe",
                    "Gisiza",
                    "Nkamba",
                    "Nkomero",
                    "Nturo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nkora",
                  "villages": [
                    "Buhimba",
                    "Gahotora",
                    "Gasagara",
                    "Gasereganya",
                    "Humiro",
                    "Kabashyembe",
                    "Kanyirahweza",
                    "Karambi",
                    "Kigugu",
                    "Muhora",
                    "Rukundo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyagahinika",
                  "villages": [
                    "Bukungu",
                    "Kampi",
                    "Nteko",
                    "Nyarusuku",
                    "Rugabi",
                    "Rukombe",
                    "Rupango",
                    "Rusisiro",
                    "Ruvumu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rukaragata",
                  "villages": [
                    "Gahunga",
                    "Gasenyi",
                    "Kagondero",
                    "Kamina",
                    "Kinihira",
                    "Murambi",
                    "Nganzo",
                    "Rwambeho",
                    "Rwamiyaga",
                    "Tagaza"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kivumu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bunyoni",
                  "villages": [
                    "Bureke",
                    "Gashinga",
                    "Gihari",
                    "Gitwa",
                    "Kabigabiro",
                    "Kanyempanga",
                    "Nyarubuye"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bunyunju",
                  "villages": [
                    "Cyivugiza",
                    "Kamabuye",
                    "Karungu",
                    "Mpinga",
                    "Rwamvura",
                    "Tarafiporo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabere",
                  "villages": [
                    "Burambo",
                    "Burango",
                    "Cyato",
                    "Kabitara",
                    "Kabusagara",
                    "Kagera",
                    "Mushubati"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabujenje",
                  "villages": [
                    "Bitare",
                    "Buhogo",
                    "Kabagwe",
                    "Kabuye",
                    "Kanyamatembe",
                    "Rurembo",
                    "Rusisiro",
                    "Rutambi",
                    "Tarasi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambi",
                  "villages": [
                    "Bukiro",
                    "Bukumba",
                    "Buroha",
                    "Bushamba",
                    "Gateko",
                    "Kabuga",
                    "Nyundo",
                    "Rusumo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nganzo",
                  "villages": [
                    "Bubira",
                    "Bugarishya",
                    "Kamwimba",
                    "Muramba",
                    "Nyabiti",
                    "Remera",
                    "Rwinyoni",
                    "Tawuni"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Manihira",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Haniro",
                  "villages": [
                    "Bitabaro",
                    "Gisunzu",
                    "Gitwe",
                    "Kaziramihunda",
                    "Kivumu",
                    "Mifu",
                    "Rukondo",
                    "Runaba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muyira",
                  "villages": [
                    "Birambo",
                    "Kagarama",
                    "Kamishunguro",
                    "Kanama",
                    "Kimpongo",
                    "Mujebeshi",
                    "Muyira",
                    "Nyakarambi",
                    "Rufungo",
                    "Rutangaza",
                    "Rutare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Tangabo",
                  "villages": [
                    "Kabeza",
                    "Kadehero",
                    "Kanama",
                    "Karambo",
                    "Munini",
                    "Nyarushogwe",
                    "Rugano"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mukura",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kabuga",
                  "villages": [
                    "Kabahigi",
                    "Karambo Ya 1",
                    "Miraramo",
                    "Sanzare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagano",
                  "villages": [
                    "Cyabatsinga",
                    "Gakeri",
                    "Kabacuzi",
                    "Kagano",
                    "Kamonyi",
                    "Kazizi",
                    "Kibavu",
                    "Kiriba",
                    "Ntobo",
                    "Nyaburama",
                    "Rugomero",
                    "Tumba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kageyo",
                  "villages": [
                    "Bitura",
                    "Karumbi",
                    "Kigeyo",
                    "Kimishishi",
                    "Mucaca",
                    "Ntonde",
                    "Nyanzu",
                    "Rukeri",
                    "Rukondo",
                    "Site Mukura Ya 1",
                    "Site Mukura Ya 2"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kagusa",
                  "villages": [
                    "Bucyeye",
                    "Gako",
                    "Gasharu",
                    "Muhindo",
                    "Rusasa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karambo",
                  "villages": [
                    "Bandamiko",
                    "Dehero",
                    "Gasambi",
                    "Gihumo",
                    "Gituntu",
                    "Karambo Ya 2",
                    "Terimbere"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mwendo",
                  "villages": [
                    "Bitenga",
                    "Gafu",
                    "Gako",
                    "Gitega",
                    "Kabeza",
                    "Kabisasa",
                    "Kagogo",
                    "Kagombwa",
                    "Kamariba",
                    "Mataba",
                    "Nyarubande",
                    "Nyarusongati",
                    "Nyove",
                    "Rugari"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Murunda",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kirwa",
                  "villages": [
                    "Bukongora",
                    "Gasasa",
                    "Kabatemba",
                    "Kajugujugu",
                    "Karumbi",
                    "Karuruma",
                    "Muremure",
                    "Nyenyeri",
                    "Ruhanga",
                    "Rusisiro",
                    "Satinsyi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mburamazi",
                  "villages": [
                    "Gatoki",
                    "Kamuhoza",
                    "Kariba",
                    "Murunda",
                    "Rukingu",
                    "Rurimba",
                    "Rwamiko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugeyo",
                  "villages": [
                    "Kabeza",
                    "Kamabuye",
                    "Kamusambi",
                    "Karambo",
                    "Musongati"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Twabugezi",
                  "villages": [
                    "Bweramana",
                    "Gatare",
                    "Nyarucundura",
                    "Rwanika",
                    "Rwoza"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Musasa",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gabiro",
                  "villages": [
                    "Gabiro",
                    "Gitwa",
                    "Murama",
                    "Nyagahinga",
                    "Nyarugenge",
                    "Rugarambiro",
                    "Rwagatoki",
                    "Rwangoma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gisiza",
                  "villages": [
                    "Bweramana",
                    "Gasharu",
                    "Gihinga",
                    "Gisiza",
                    "Gitovu",
                    "Karambi",
                    "Karambo",
                    "Ngoma",
                    "Nyagafurwe",
                    "Rubaya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": [
                    "Bunnyari",
                    "Buruseri",
                    "Kabatoni",
                    "Munyinya",
                    "Murambi",
                    "Nyamasheke",
                    "Rwintanga",
                    "Rwumba",
                    "Syiki"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyarubuye",
                  "villages": [
                    "Bwinyana",
                    "Gataka",
                    "Gitete",
                    "Kabuga",
                    "Mirambi",
                    "Muhororo",
                    "Rebero"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mushonyi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Biruyi",
                  "villages": [
                    "Buhunde",
                    "Bushunga",
                    "Buzukira",
                    "Kabakiza",
                    "Kamaranzara",
                    "Karengera",
                    "Mugara",
                    "Rurimba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kaguriro",
                  "villages": [
                    "Cyondo",
                    "Gakenke",
                    "Kabere",
                    "Kivumu",
                    "Maziba",
                    "Mubuga",
                    "Rugerero",
                    "Rwesero",
                    "Ryarwasa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Magaba",
                  "villages": [
                    "Gakomeye",
                    "Gasave",
                    "Gihumba",
                    "Kakibaba",
                    "Kariba",
                    "Nkomero",
                    "Ruyogoro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rurara",
                  "villages": [
                    "Gasoro",
                    "Gisunzu",
                    "Kaboneye",
                    "Kagano",
                    "Kashishi",
                    "Kavumu",
                    "Mukati",
                    "Ngunguru",
                    "Rugaragara",
                    "Ruhengeri"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mushubati",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bumba",
                  "villages": [
                    "Bisyo",
                    "Kabiraho",
                    "Kamushozi",
                    "Karambi",
                    "Mataba",
                    "Rugote",
                    "Ruhinga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyarusera",
                  "villages": [
                    "Bivumu",
                    "Cyahafi",
                    "Gasharu",
                    "Kigarama",
                    "Kunini",
                    "Mugeri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gitwa",
                  "villages": [
                    "Gakoma",
                    "Gashinge",
                    "Karambira",
                    "Kibari",
                    "Mbuga",
                    "Mubuga",
                    "Mugote",
                    "Rububa",
                    "Ruhinga",
                    "Rwintore",
                    "Taba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mageragere",
                  "villages": [
                    "Gitega",
                    "Murambi",
                    "Nyakabuye",
                    "Nyarusange",
                    "Rarankuba",
                    "Rushikiri"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Sure",
                  "villages": [
                    "Kabuga",
                    "Kaduha",
                    "Kagugu",
                    "Kanyinya",
                    "Kivumu",
                    "Nyagahinga",
                    "Nyamahuru"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyabirasi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Busuku",
                  "villages": [
                    "Bishami",
                    "Busuku",
                    "Busuti",
                    "Bwiza",
                    "Gacaca",
                    "Gatare",
                    "Ngugo",
                    "Nyakibande",
                    "Rwamigega",
                    "Torwe",
                    "Tsindiro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Cyivugiza",
                  "villages": [
                    "Cyubi",
                    "Gakumba",
                    "Gishahaga",
                    "Kageyo",
                    "Kamananga",
                    "Mukungu",
                    "Nyabishongo",
                    "Rukomero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mubuga",
                  "villages": [
                    "Bugorozi",
                    "Buryoshya",
                    "Gakararanka",
                    "Gashasho",
                    "Gatsiro",
                    "Gitongo",
                    "Kabaratama",
                    "Mubuga",
                    "Pfunda",
                    "Rushubi",
                    "Rutovu",
                    "Rwankuba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ngoma",
                  "villages": [
                    "Bukanda",
                    "Bushoga",
                    "Cyeshero",
                    "Gashihe",
                    "Gisayo",
                    "Gishowa",
                    "Kaje",
                    "Kamunyurwe",
                    "Kazo",
                    "Mpati",
                    "Ngoma",
                    "Nkuna"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Terimbere",
                  "villages": [
                    "Gihinga",
                    "Kageshi",
                    "Kanombe",
                    "Karongi",
                    "Kasonga",
                    "Kinyamavuta",
                    "Mukondo",
                    "Negenero",
                    "Nyampengeri",
                    "Ruraji",
                    "Rwandozi",
                    "Rwangambuto",
                    "Ryanyiramunonko"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Ruhango",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatare",
                  "villages": [
                    "Gasovu",
                    "Gasoyo",
                    "Kamuramira",
                    "Kirinja",
                    "Mwurire",
                    "Ruhimbi",
                    "Rukenesha"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gihira",
                  "villages": [
                    "Bitenga",
                    "Busenda",
                    "Karambagiro",
                    "Kararo",
                    "Kinyenkanda",
                    "Murambi",
                    "Rukoko",
                    "Tara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kavumu",
                  "villages": [
                    "Gakeri",
                    "Gasasa",
                    "Gasunzu",
                    "Mubirizi",
                    "Muhingo",
                    "Nyundo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyakarera",
                  "villages": [
                    "Buzeyi",
                    "Kabeza",
                    "Kagogo",
                    "Kayove",
                    "Marabuye",
                    "Mugali"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugasa",
                  "villages": [
                    "Cyashenge",
                    "Gicaca",
                    "Kabitovu",
                    "Kiraza",
                    "Murambi",
                    "Nyakagezi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rundoyi",
                  "villages": [
                    "Gakararanka",
                    "Karebero",
                    "Kaziga",
                    "Matyazo",
                    "Rugaragara",
                    "Rushasho"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rusebeya",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kabona",
                  "villages": [
                    "Byiniro",
                    "Kibara",
                    "Munini",
                    "Murengeri",
                    "Ntereye",
                    "Nyagasambu",
                    "Rusheshi",
                    "Rwamvura"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mberi",
                  "villages": [
                    "Bungwe",
                    "Gakeri",
                    "Gashihe",
                    "Gatenga",
                    "Gihinga",
                    "Kabeza",
                    "Kacyiru",
                    "Kagano",
                    "Marimba",
                    "Ruganda",
                    "Rurimba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Remera",
                  "villages": [
                    "Bihira",
                    "Bweramana",
                    "Gahunga",
                    "Kabarirwa",
                    "Kiyanja",
                    "Nturo",
                    "Ruhuha",
                    "Rurambo",
                    "Shyembe"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ruronde",
                  "villages": [
                    "Gisozi",
                    "Kigali",
                    "Kirumbi",
                    "Mubuga",
                    "Nyamibombwe"
                  ]
                }
              ]
            }
          ]
        },
        {
          "type": "DISTRICT",
          "name": "Rusizi",
          "sectors": [
            {
              "type": "SECTORS",
              "name": "Bugarama",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Nyange",
                  "villages": [
                    "Cité",
                    "Cyagara",
                    "Gatebe",
                    "Kabeza",
                    "Kamabuye",
                    "Mihabura",
                    "Misufi",
                    "Mubogora",
                    "Muko",
                    "Munini",
                    "Nyange",
                    "Rubumba",
                    "Rusayo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Pera",
                  "villages": [
                    "Buhanga",
                    "Isangano",
                    "Ituze",
                    "Kabusunzu",
                    "Kabuye",
                    "Kinamba",
                    "Kiyovu",
                    "Majyambere",
                    "Murambi",
                    "Murwa",
                    "Mwaro",
                    "Pera"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ryankana",
                  "villages": [
                    "Gihigano",
                    "Gombaniro",
                    "Kabuga",
                    "Kagarama",
                    "Kayenzi",
                    "Mahoro",
                    "Mubombo",
                    "Muyange",
                    "Nyehonga",
                    "Rubyiro",
                    "Ruhwa",
                    "Rusizi"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Butare",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Butanda",
                  "villages": [
                    "Buganzo",
                    "Gasihe",
                    "Gitega",
                    "Murambi",
                    "Mwoya",
                    "Rugera",
                    "Rujagi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatereri",
                  "villages": [
                    "Giciramata",
                    "Gisovu",
                    "Kabuga",
                    "Karama",
                    "Kareba",
                    "Nyabitimbo",
                    "Nyaburenge",
                    "Nyakibanda",
                    "Nyambeho",
                    "Ruhinga",
                    "Rwibutso"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamihanda",
                  "villages": [
                    "Kenya",
                    "Kirwano",
                    "Munkamba",
                    "Mwimerere",
                    "Ndengerezi",
                    "Rushwati"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwambogo",
                  "villages": [
                    "Bisengo",
                    "Buye",
                    "Byimana",
                    "Cyaruhiza",
                    "Cyijuru",
                    "Gasumo",
                    "Karambo",
                    "Kigarama",
                    "Nyaruteja",
                    "Rutovu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Bweyeye",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gikungu",
                  "villages": ["Kibonajoro", "Rwamagare"]
                },
                {
                  "type": "CELLS",
                  "name": "Kiyabo",
                  "villages": [
                    "Bunyagiro",
                    "Matyazo",
                    "Mbisabasaba",
                    "Mudasomwa",
                    "Mutara",
                    "Ruhondo",
                    "Runege",
                    "Rutobo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Murwa",
                  "villages": ["Muyebe", "Nyabigoma"]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamuzi",
                  "villages": ["Gakopfo", "Kigobe", "Muhiza", "Rwamisave"]
                },
                {
                  "type": "CELLS",
                  "name": "Rasano",
                  "villages": [
                    "Banamba",
                    "Kabuga",
                    "Nyamirambo",
                    "Nyamutake",
                    "Runyami",
                    "Runyovu",
                    "Uwinzovu"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gashonga",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Birembo",
                  "villages": ["Mariba", "Burama"]
                },
                {
                  "type": "CELLS",
                  "name": "Buhokoro",
                  "villages": [
                    "Busekera",
                    "Cyimbazi",
                    "Gahinga",
                    "Kabahizi",
                    "Ryagacece"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabakobwa",
                  "villages": ["Gatare", "Munini", "Rango", "Rwesero"]
                },
                {
                  "type": "CELLS",
                  "name": "Kacyuma",
                  "villages": ["Mubuga", "Mukaba", "Rango", "Torero"]
                },
                {
                  "type": "CELLS",
                  "name": "Kamurehe",
                  "villages": [
                    "Gacyamo",
                    "Gasharu",
                    "Kamonyi",
                    "Mashya",
                    "Murehe",
                    "Nyabihanga",
                    "Rebero",
                    "Shara"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Karemereye",
                  "villages": [
                    "Kabaha",
                    "Kabahinda",
                    "Kagikongoro",
                    "Mibirizi",
                    "Rugarama"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muti",
                  "villages": [
                    "Gakombe",
                    "Kabeza",
                    "Karenge",
                    "Marebe",
                    "Rugende"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rusayo",
                  "villages": [
                    "Bitaba",
                    "Kamuhana",
                    "Kibombwe",
                    "Kiremereye",
                    "Misave",
                    "Nyamutarama",
                    "Ryagatebe"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Giheke",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyendajuru",
                  "villages": ["Burembo", "Kabeza", "Kibakure", "Murinzi"]
                },
                {
                  "type": "CELLS",
                  "name": "Gakomeye",
                  "villages": [
                    "Buzi",
                    "Gacyamo",
                    "Kabuga",
                    "Kagarama",
                    "Ruvumbu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Giheke",
                  "villages": [
                    "Karambo",
                    "Murambi",
                    "Rugombo",
                    "Rwumvangoma",
                    "Wimana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamashangi",
                  "villages": ["Gitwa", "Isha", "Kamuhozi", "Rukombe"]
                },
                {
                  "type": "CELLS",
                  "name": "Kigenge",
                  "villages": ["Gahinga", "Gahurubuka", "Rwamiko"]
                },
                {
                  "type": "CELLS",
                  "name": "Ntura",
                  "villages": [
                    "Bubanga",
                    "Kabujyogoro",
                    "Kabyuma",
                    "Karambi",
                    "Kavuye",
                    "Kigenge",
                    "Ntura",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwega",
                  "villages": ["Impala", "Kanoga", "Rwega"]
                },
                {
                  "type": "CELLS",
                  "name": "Turambi",
                  "villages": ["Kamuhoza", "Munyove", "Rwinkwavu", "Turambi"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gihundwe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Burunga",
                  "villages": [
                    "Burunga",
                    "Cyapa",
                    "Cyunyu",
                    "Gacamahembe",
                    "Kamabuye",
                    "Kanombe",
                    "Karangiro",
                    "Karitasi",
                    "Karorabose",
                    "Karushaririza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gatsiro",
                  "villages": [
                    "Gahinga",
                    "Gikombe",
                    "Kavumu",
                    "Kinyereri",
                    "Mpongora",
                    "Rwahi",
                    "Tuwonane"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gihaya",
                  "villages": ["Budorozo", "Kinyaga"]
                },
                {
                  "type": "CELLS",
                  "name": "Kagara",
                  "villages": [
                    "Bahemba",
                    "Kivoga",
                    "Nyandarama",
                    "Rubenga I",
                    "Rubenga II",
                    "Rukohwa"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamatita",
                  "villages": [
                    "Cyinzovu",
                    "Gahwazi",
                    "Kamanyenga",
                    "Muhari",
                    "Munyana",
                    "Ngoma"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shagasha",
                  "villages": [
                    "Bisanganira",
                    "Gasharu",
                    "Gitwa",
                    "Kanoga",
                    "Karambo",
                    "Nyagatare",
                    "Shagasha"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gikundamvura",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Kizura",
                  "villages": [
                    "Gasharu",
                    "Gitambi",
                    "Hinduka",
                    "Ituze",
                    "Kamabuye",
                    "Mubera",
                    "Mutonga",
                    "Ruhango",
                    "Rukuraza",
                    "Shanike"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mpinga",
                  "villages": [
                    "Birindiro",
                    "Busarabuye",
                    "Bushenge",
                    "Gihomba",
                    "Kaberenge",
                    "Kagari",
                    "Kirume",
                    "Matyazo",
                    "Mpuzamahanga",
                    "Mubuga",
                    "Mugerero",
                    "Nyabihanga",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyamigina",
                  "villages": [
                    "Binyaburanga",
                    "Buhinga",
                    "Bumaranyota",
                    "Bwiza",
                    "Jyambere",
                    "Kanoga",
                    "Kariba"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Gitambi",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyingwa",
                  "villages": [
                    "Kabucuku",
                    "Kabugarama",
                    "Mpinga",
                    "Mugenge",
                    "Rwihene"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gahungeri",
                  "villages": [
                    "Kamagaju",
                    "Kamonyi",
                    "Kaninda",
                    "Kazinda",
                    "Kigarama",
                    "Mugerero",
                    "Njambwe",
                    "Nyakibingo",
                    "Nyamaganda",
                    "Nyantaba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Hangabashi",
                  "villages": [
                    "Kabonabose",
                    "Kabuga",
                    "Karambo",
                    "Kirehe",
                    "Nzabuhaha",
                    "Runanira"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mashesha",
                  "villages": [
                    "Busasamana",
                    "Idaga",
                    "Kankuba",
                    "Karama",
                    "Nyakivomero",
                    "Ruvuruga"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Kamembe",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyangugu",
                  "villages": [
                    "Gatovu",
                    "Karambo",
                    "Karangiro",
                    "Mont Cyangugu",
                    "Mundima",
                    "Ngoma",
                    "Ntwari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gihundwe",
                  "villages": [
                    "Batero",
                    "Burunga",
                    "Kabeza",
                    "Munyinya",
                    "Murambi",
                    "Nkurunziza"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamashangi",
                  "villages": [
                    "Amahoro",
                    "Badura",
                    "Gitinda",
                    "Kadasomwa",
                    "Kannyogo",
                    "Mbagira",
                    "Mucyamo",
                    "Ntemabiti",
                    "Nyakayonga",
                    "Rushakamba",
                    "Umuganda"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamurera",
                  "villages": ["Cyapa", "Gikombe", "Kamuhirwa", "Murangi"]
                },
                {
                  "type": "CELLS",
                  "name": "Ruganda",
                  "villages": ["Kadashya", "Kamubaji", "Murindi", "Ruhimbi"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Muganza",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Cyarukara",
                  "villages": [
                    "Gashinjano",
                    "Gashisha",
                    "Gisozi",
                    "Kabamba",
                    "Murira",
                    "Nyakagoma",
                    "Rubumba",
                    "Rubyiro",
                    "Rungunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gakoni",
                  "villages": [
                    "Gatabuvuga",
                    "Gatanga",
                    "Kabeza",
                    "Kindobwe",
                    "Kiyovu",
                    "Muhuta",
                    "Nyakagenge",
                    "Rebero",
                    "Rugaragara",
                    "Sanganiro",
                    "Sano",
                    "Umutuzo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Shara",
                  "villages": [
                    "Busasamana",
                    "Gakenke",
                    "Kabarore",
                    "Kamabuye",
                    "Murabyo",
                    "Nyabishunju",
                    "Nyenyeri",
                    "Ramiro",
                    "Rubeho"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Mururu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gahinga",
                  "villages": [
                    "Birogo",
                    "Buremera",
                    "Cyirabyo A",
                    "Cyirabyo B",
                    "Gipfura",
                    "Kabirizi",
                    "Kamarebe",
                    "Kanunga",
                    "Mutara",
                    "Ryabadugu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabahinda",
                  "villages": ["Kabahire", "Karambo", "Winteko"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabasigirira",
                  "villages": ["Bitongo", "Butazigurwa", "Mutimasi"]
                },
                {
                  "type": "CELLS",
                  "name": "Kagarama",
                  "villages": ["Cyete", "Gikungwe", "Gitwa", "Kamatene"]
                },
                {
                  "type": "CELLS",
                  "name": "Karambi",
                  "villages": ["Bugayi", "Gihango", "Kagarama"]
                },
                {
                  "type": "CELLS",
                  "name": "Miko",
                  "villages": ["Kabageni", "Nyakanyinya", "Ruhimbi"]
                },
                {
                  "type": "CELLS",
                  "name": "Tara",
                  "villages": [
                    "Byangoma",
                    "Cyandarama",
                    "Gatimbwa",
                    "Kamutongo",
                    "Karanjwa",
                    "Mukorazuba",
                    "Mutongo",
                    "Rugerero"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nkanka",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gitwa",
                  "villages": [
                    "Buganda",
                    "Burege",
                    "Kanyombya",
                    "Karama",
                    "Muhonga",
                    "Rugarika"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamanyenga",
                  "villages": [
                    "Gatebe",
                    "Hepfo",
                    "Kavogo",
                    "Muramba",
                    "Nyabiranga",
                    "Rweya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kangazi",
                  "villages": [
                    "Bahemba",
                    "Busekanka",
                    "Gafoka",
                    "Muyange",
                    "Rusunyu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kinyaga",
                  "villages": [
                    "Kabutimbiri",
                    "Kinyaga",
                    "Miramba",
                    "Rugaragara",
                    "Sumoyamana"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rugabano",
                  "villages": [
                    "Bitaba",
                    "Kagarama",
                    "Kamahoro",
                    "Karambo",
                    "Rebero",
                    "Rurembo"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nkombo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Bigoga",
                  "villages": [
                    "Gisunyu",
                    "Giteme",
                    "Kabashinga",
                    "Ngoma",
                    "Nyawenya",
                    "Rebero"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Bugarura",
                  "villages": ["Gaturo", "Nyakabanda", "Nyankumbira", "Rurembo"]
                },
                {
                  "type": "CELLS",
                  "name": "Ishywa",
                  "villages": ["Biraro", "Kaboneke", "Kabuga", "Mapfura"]
                },
                {
                  "type": "CELLS",
                  "name": "Kamagimbo",
                  "villages": [
                    "Gashara",
                    "Gitwa",
                    "Kabuye",
                    "Kanyinya",
                    "Karenge",
                    "Mbuga",
                    "Muhora"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwenje",
                  "villages": ["Gituro", "Mirara", "Nyabintare", "Rutarakiro"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nkungu",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatare",
                  "villages": [
                    "Bahuro",
                    "Cyandarama",
                    "Kimpundu",
                    "Kivugiza",
                    "Madaho",
                    "Njambwe",
                    "Rubona",
                    "Rutegamatwi"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiziguro",
                  "villages": [
                    "Byugaro",
                    "Gasarabuye",
                    "Kabigohe",
                    "Kabuga",
                    "Kabuganza",
                    "Kadashya",
                    "Kamabuye",
                    "Karongoro",
                    "Mpinga",
                    "Mukenke",
                    "Rebero",
                    "Ryamibuga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mataba",
                  "villages": [
                    "Gashashi",
                    "Gatagara",
                    "Gatondo",
                    "Gikombe",
                    "Honga",
                    "Kabinyugwe",
                    "Kamajumba",
                    "Migazo",
                    "Muhora",
                    "Rubona",
                    "Rwamaraba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Ryamuhirwa",
                  "villages": [
                    "Gako",
                    "Gatarange",
                    "Kigurwe",
                    "Kinanira",
                    "Kiyanza",
                    "Nyarushishi",
                    "Rugabe",
                    "Rususa",
                    "Ryamaraza"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyakabuye",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gasebeya",
                  "villages": [
                    "Biteri",
                    "Gacyamo",
                    "Gahuna",
                    "Gaseke",
                    "Gashyuha",
                    "Kabuye",
                    "Kanoga",
                    "Karambi",
                    "Kaveya"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Gaseke",
                  "villages": [
                    "Bitendezi",
                    "Gatambamo",
                    "Kagabiro",
                    "Kagenge",
                    "Kinunga",
                    "Muyange",
                    "Rubona"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kamanu",
                  "villages": [
                    "Bikinga",
                    "Bugumya",
                    "Gatare",
                    "Gishagara",
                    "Kamusana",
                    "Kiyovu",
                    "Mpoga",
                    "Mukondo",
                    "Murambi",
                    "Nyakagoma",
                    "Nyeshati",
                    "Ruguti",
                    "Ryamberu",
                    "Segege",
                    "Shaba",
                    "Site"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kiziho",
                  "villages": [
                    "Bunyereri",
                    "Kamagerero",
                    "Makoko",
                    "Nkanga",
                    "Ruhinga",
                    "Rwimbogo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mashyuza",
                  "villages": [
                    "Cyamura",
                    "Kibirizi",
                    "Nyamaronko",
                    "Ruganzu",
                    "Rukamba"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyabintare",
                  "villages": [
                    "Barenga",
                    "Gakungu",
                    "Gatanga",
                    "Gatare",
                    "Mabuye",
                    "Mizibira",
                    "Peru",
                    "Ryarubaka"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nyakarenzo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Gatare",
                  "villages": ["Bigando", "Kabumbwe", "Rwindare"]
                },
                {
                  "type": "CELLS",
                  "name": "Kabagina",
                  "villages": [
                    "Bitaba",
                    "Gacyamo",
                    "Gitovu",
                    "Karambi",
                    "Nyamugari"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kabuye",
                  "villages": [
                    "Bisenyi",
                    "Kazuba",
                    "Kigarama",
                    "Mashya",
                    "Mugerero",
                    "Nyamagana",
                    "Nyungu"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kanoga",
                  "villages": ["Kamanura", "Kanoga", "Kanyovu", "Kumana"]
                },
                {
                  "type": "CELLS",
                  "name": "Karangiro",
                  "villages": ["Cyimbogo", "Gihusi", "Gituza", "Kabayego"]
                },
                {
                  "type": "CELLS",
                  "name": "Murambi",
                  "villages": ["Gisovu", "Njambwe", "Runyanzovu"]
                },
                {
                  "type": "CELLS",
                  "name": "Rusambu",
                  "villages": ["Gataramo", "Karambi", "Mugongo", "Rusambu"]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Nzahaha",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Butambamo",
                  "villages": [
                    "Gashagwa",
                    "Karunyerera",
                    "Muguri",
                    "Ngoma",
                    "Ryarusaro"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Kigenge",
                  "villages": ["Gihungwe", "Kacyiru", "Karagizwa", "Ndabereye"]
                },
                {
                  "type": "CELLS",
                  "name": "Murya",
                  "villages": [
                    "Buganza",
                    "Gacuriro",
                    "Gisheke",
                    "Kamina",
                    "Nyagahanga",
                    "Nyagasozi",
                    "Ryagashyitsi",
                    "Tare"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Nyenji",
                  "villages": [
                    "Gasharu",
                    "Gatare",
                    "Kinengwe",
                    "Murindi",
                    "Ruganzu",
                    "Rugunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rebero",
                  "villages": [
                    "Gatovu",
                    "Giti",
                    "Kabuyange",
                    "Rukoro",
                    "Shariyo"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rwinzuki",
                  "villages": [
                    "Gasave",
                    "Kabugabo",
                    "Kibirezi",
                    "Kiranga",
                    "Murambi",
                    "Nyagahinga",
                    "Peru"
                  ]
                }
              ]
            },
            {
              "type": "SECTORS",
              "name": "Rwimbogo",
              "cells": [
                {
                  "type": "CELLS",
                  "name": "Karenge",
                  "villages": [
                    "Batura",
                    "Gatanga",
                    "Gishoma",
                    "Makambi",
                    "Nyabihanga",
                    "Ruzeneko"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Muhehwe",
                  "villages": [
                    "Kibare",
                    "Murama",
                    "Musigiti",
                    "Nyarusebeya",
                    "Renga",
                    "Rungunga"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Mushaka",
                  "villages": [
                    "Gakombe",
                    "Gatambamo",
                    "Kabajoba",
                    "Kamabuye",
                    "Nyagashora"
                  ]
                },
                {
                  "type": "CELLS",
                  "name": "Rubugu",
                  "villages": ["Gatare", "Ntenyi", "Nyange", "Rukombe"]
                },
                {
                  "type": "CELLS",
                  "name": "Ruganda",
                  "villages": [
                    "Cyunguriro",
                    "Musumba",
                    "Rubamba",
                    "Rubuye",
                    "Ruhinga"
                  ]
                }
              ]
            }
          ]
        }
      ]
    }
  ]

        // Function to populate dropdowns dynamically
        function populateDropdowns(type, level, idPrefix) {
            const selectElement = document.getElementById(idPrefix + level);
            selectElement.innerHTML = `<option value="">Select ${level}</option>`;
            const provinceName = document.getElementById(idPrefix + "Province").value;
            const province = data.find(p => p.name === provinceName);

            if (province) {
                let items = [];
                if (level === "District") {
                    items = province.districts;
                } else if (level === "Sector") {
                    const districtName = document.getElementById(idPrefix + "District").value;
                    const district = province.districts.find(d => d.name === districtName);
                    if (district) {
                        items = district.sectors;
                    }
                } else if (level === "Cell") {
                    const sectorName = document.getElementById(idPrefix + "Sector").value;
                    const sector = province.districts
                        .find(d => d.name === document.getElementById(idPrefix + "District").value)
                        .sectors.find(s => s.name === sectorName);
                    if (sector) {
                        items = sector.cells;
                    }
                } else if (level === "Village") {
                    const cellName = document.getElementById(idPrefix + "Cell").value;
                    const cell = province.districts
                        .find(d => d.name === document.getElementById(idPrefix + "District").value)
                        .sectors.find(s => s.name === document.getElementById(idPrefix + "Sector").value)
                        .cells.find(c => c.name === cellName);
                    if (cell) {
                        items = cell.villages;
                    }
                }

                items.forEach(item => {
                    const option = document.createElement("option");
                    option.value = item.name || item;
                    option.textContent = item.name || item;
                    selectElement.appendChild(option);
                });
            }
        }

        function populateDistricts(type) {
            populateDropdowns(type, "District", type === "urega" ? "urega" : "uregwa");
        }

        function populateSectors(type) {
            populateDropdowns(type, "Sector", type === "urega" ? "urega" : "uregwa");
        }

        function populateCells(type) {
            populateDropdowns(type, "Cell", type === "urega" ? "urega" : "uregwa");
        }

        function populateVillages(type) {
            populateDropdowns(type, "Village", type === "urega" ? "urega" : "uregwa");
        }

        // Function to navigate between steps
        let currentStep = 1;
        function navigateForm(direction) {
            const steps = document.querySelectorAll('.section');
            if (currentStep + direction >= 1 && currentStep + direction <= steps.length) {
                steps[currentStep - 1].classList.remove('active');
                currentStep += direction;
                steps[currentStep - 1].classList.add('active');
            }

            // Show/hide next/prev buttons based on current step
            document.getElementById('prevBtn').style.display = currentStep === 1 ? 'none' : 'inline-block';
            document.getElementById('nextBtn').style.display = currentStep === steps.length ? 'none' : 'inline-block';
        }

        function submitForm(event) {
            event.preventDefault();
            alert("Form submitted successfully!");
        }

        // Populate the Province dropdowns on page load
        window.onload = function () {
            const uregaProvinceSelect = document.getElementById("uregaProvince");
            const uregwaProvinceSelect = document.getElementById("uregwaProvince");

            data.forEach(province => {
                const option1 = document.createElement("option");
                option1.value = province.name;
                option1.textContent = province.name;
                uregaProvinceSelect.appendChild(option1);

                const option2 = document.createElement("option");
                option2.value = province.name;
                option2.textContent = province.name;
                uregwaProvinceSelect.appendChild(option2);
            });
        }
    </script>
</body>

</html>
