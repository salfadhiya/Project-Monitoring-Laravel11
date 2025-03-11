<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizational Chart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 20px;
            background-size: 20px 20px;
        }

        .org-chart {
            position: relative;
            width: 1200px;
            height: 600px;
            margin: 0 auto;
        }

        .box {
            border: 1px solid #a0a0a0;
            background-color: #87aae3;
            border-radius: 5px;
            padding: 10px;
            text-align: center;
            position: absolute;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        }

        .person {
            background-color: white;
            border: 1px solid #a0a0a0;
            border-radius: 5px;
            padding: 5px;
            margin-top: 10px;
            text-align: left;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dropdown {
            display: inline-block;
            margin-left: 5px;
        }

        /* Line connections */
        .connections {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        /* Specific positioning */
        #pimpro {
            top: 30px;
            left: 550px;
            width: 120px;
        }

        #project-controller {
            top: 140px;
            left: 300px;
            width: 120px;
        }

        #account-manager {
            top: 140px;
            left: 780px;
            width: 120px;
        }

        #project-engineering-manager {
            top: 140px;
            left: 1050px;
            width: 120px;
        }

        #principle-management {
            top: 290px;
            left: 0px;
            width: 120px;
        }

        #il3-management {
            top: 290px;
            left: 150px;
            width: 120px;
        }

        #project-admin {
            top: 290px;
            left: 300px;
            width: 120px;
        }

        #quality-assurance {
            top: 290px;
            left: 450px;
            width: 120px;
        }

        #hse {
            top: 290px;
            left: 600px;
            width: 120px;
        }

        #site-manager {
            top: 290px;
            left: 750px;
            width: 120px;
        }

        #project-engineer {
            top: 290px;
            left: 900px;
            width: 120px;
        }

        #technical-manager {
            top: 290px;
            left: 1050px;
            width: 120px;
        }

        #installation-technician {
            top: 400px;
            left: 750px;
            width: 120px;
        }

        #mechanical-engineer {
            top: 570px;
            left: 120px;
            width: 120px;
        }

        #production-technician {
            top: 570px;
            left: 315px;
            width: 120px;
        }

        #network-engineer {
            top: 570px;
            left: 510px;
            width: 120px;
        }

        #system-engineer {
            top: 570px;
            left: 700px;
            width: 120px;
        }

        #software-engineer {
            top: 570px;
            left: 880px;
            width: 120px;
        }

        #drafter {
            top: 570px;
            left: 1050px;
            width: 120px;
        }
    </style>
</head>
<body>
    <h2>Struktur Proyek</h2>
    <a href="/turor" class="btn btn-secondary mb-3">KEMBALI</a>
    <div class="card">
    <div class="org-chart">
        <!-- Top level -->
        <div id="pimpro" class="box">
            PIMPRO
            <div class="person">
                Orang A
                <span class="dropdown">▼</span>
            </div>
        </div>

        <!-- Second level -->
        <div id="project-controller" class="box">
            Project Controller
            <div class="person">
                Orang C
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="account-manager" class="box">
            Account Manager
            <div class="person">
                Orang E
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="project-engineering-manager" class="box">
            Project Engineering<br>Manager 1
            <div class="person">
                Orang G
                <span class="dropdown">▼</span>
            </div>
        </div>

        <!-- Third level - row 1 -->
        <div id="principle-management" class="box">
            Principle Management
            <div class="person">
                Orang I
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="il3-management" class="box">
            IL3 Management
            <div class="person">
                Orang K
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="project-admin" class="box">
            Project Admin
            <div class="person">
                Orang M
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="quality-assurance" class="box">
            Quality Assurance
            <div class="person">
                Orang O
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="hse" class="box">
            HSE
            <div class="person">
                Orang Q
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="site-manager" class="box">
            Site Manager
            <div class="person">
                Orang S
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="project-engineer" class="box">
            Project Engineer
            <div class="person">
                Orang U
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="technical-manager" class="box">
            Technical Manager
            <div class="person">
                Orang W
                <span class="dropdown">▼</span>
            </div>
        </div>

        <!-- Installation Technician -->
        <div id="installation-technician" class="box">
            Installation Technician
            <div class="person">
                Orang Y
                <span class="dropdown">▼</span>
            </div>
            <div class="person">
                Orang AA
                <span class="dropdown">▼</span>
            </div>
        </div>

        <!-- Fourth level -->
        <div id="mechanical-engineer" class="box">
            Mechanical Engineer
            <div class="person">
                Orang AC
                <span class="dropdown">▼</span>
            </div>
            <div class="person">
                Orang AE
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="production-technician" class="box">
            Production Technician
            <div class="person">
                Orang AG
                <span class="dropdown">▼</span>
            </div>
            <div class="person">
                Orang AI
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="network-engineer" class="box">
            Network Engineer
            <div class="person">
                Orang AK
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="system-engineer" class="box">
            System Engineer
            <div class="person">
                Orang AM
                <span class="dropdown">▼</span>
            </div>
            <div class="person">
                Orang AO
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="software-engineer" class="box">
            Software Engineer
            <div class="person">
                Orang AQ
                <span class="dropdown">▼</span>
            </div>
            <div class="person">
                Orang AS
                <span class="dropdown">▼</span>
            </div>
            <div class="person">
                Orang AU
                <span class="dropdown">▼</span>
            </div>
            <div class="person">
                Orang AW
                <span class="dropdown">▼</span>
            </div>
            <div class="person">
                Orang AY
                <span class="dropdown">▼</span>
            </div>
            <div class="person">
                Orang BA
                <span class="dropdown">▼</span>
            </div>
        </div>

        <div id="drafter" class="box">
            Drafter
            <div class="person">
                Orang BC
                <span class="dropdown">▼</span>
            </div>
        </div>

        <!-- SVG lines for connections -->
        <svg class="connections" width="100%" height="100%">
            <!-- PIMPRO connections -->
            <!-- Red line from PIMPRO down to Project Controller and Account Manager -->
            <path d="M610,110 L610,140 L400,140" stroke="red" stroke-width="3" fill="none"/>
            <path d="M610,110 L610,140 L810,140" stroke="red" stroke-width="3" fill="none"/>

            <!-- Long top horizontal red line connecting to Project Engineering Manager -->
            <path d="M1120,200 L1120,340" stroke="red" stroke-width="3" fill="none"/>

            <!-- Long vertical red line from PIMPRO down to third level horizontal line -->
            <path d="M60,288 L1120,288" stroke="red" stroke-width="3" fill="none"/>

            <!-- Horizontal line connecting all third level boxes -->
            <path d="M820,400 L820,290" stroke="red" stroke-width="3" fill="none"/>

            <!-- Project Engineering Manager to Technical Manager -->
            <path d="M1120,600 L1120,290" stroke="red" stroke-width="3" fill="none"/>

            <!-- Site Manager to right edge horizontal line for Installation Technician -->
            <path d="M550000,180 L180,570" stroke="red" stroke-width="3" fill="none"/>

            <!-- Technical Manager to Installation Technician -->
            {{-- <path d="M1090,255 L1090,310" stroke="red" stroke-width="3" fill="none"/> --}}

            <!-- Horizontal line at bottom connecting all bottom boxes -->
            {{-- <path d="M120,350 L1120,350" stroke="red" stroke-width="3" fill="none"/> --}}

            <!-- Red box outline enclosing multiple boxes -->
            {{-- <path d="M90,170 L1140,170 L1140,340 L960,340 L960,280 L90,280 L90,170" stroke="red" stroke-width="3" fill="none"/> --}}
        </svg>
    </div>
    </div>
</body> 
</html>
