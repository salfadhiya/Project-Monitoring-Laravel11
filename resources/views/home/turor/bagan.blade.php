<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
            background-image: linear-gradient(#dedede 1px, transparent 1px),
                              linear-gradient(90deg, #dedede 1px, transparent 1px);
            background-size: 20px 20px;
        }

        .org-chart {
            width: 100%;
            overflow: auto;
            position: relative;
        }

        .org-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .level {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-bottom: 20px;
            position: relative;
        }

        .department {
            border: 1px solid #aaa;
            margin: 0 10px;
            min-width: 150px;
            max-width: 200px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            background-color: white;
            position: relative;
            z-index: 2;
        }

        .title {
            background-color: #a8c4e5;
            padding: 8px;
            text-align: center;
            font-weight: bold;
            border-bottom: 1px solid #aaa;
        }

        .name {
            background-color: #ffffff;

            padding: 8px;
            text-align: center;
            position: relative;
        }

        .name select {
            width: 100%;
            border: none;
            background-color: transparent;
            text-align-last: center;
            appearance: none;
            cursor: pointer;
            font-size: 14px;
        }

        .name:after {
            content: "▼";
            position: absolute;
            right: 8px;
            top: 8px;
            font-size: 10px;
            color: #666;
            pointer-events: none;
        }

        .multi-department {
            display: flex;
            justify-content: space-around;
            width: 100%;
            position: relative;
        }

        /* Connectors */
        .vertical-line {
            position: absolute;
            width: 2px;
            background-color: red;
            z-index: 1;
        }

        .horizontal-line {
            position: absolute;
            height: 2px;
            background-color: red;
            z-index: 1;
        }

        /* Specific connector lines */
        #main-vertical {
            top: 55px;
            left: 50%;
            height: 40px;
            transform: translateX(-50%);
        }

        #level2-horizontal {
            top: 155px;
            left: 25%;
            width: 50%;
        }

        #level3-horizontal {
            top: 285px;
            left: 5%;
            width: 90%;
        }

        #site-manager-vertical {
            top: 285px;
            left: 75.5%;
            height: 40px;
        }

        #technical-manager-vertical {
            top: 285px;
            left: 91%;
            height: 40px;
        }

        #level5-horizontal {
            top: 430px;
            left: 5%;
            width: 90%;
        }
    </style>
</head>
<body>
    <div class="org-chart">
        <!-- Connector lines -->
        <div class="vertical-line" id="main-vertical"></div>
        <div class="horizontal-line" id="level2-horizontal"></div>
        <div class="horizontal-line" id="level3-horizontal"></div>
        <div class="vertical-line" id="site-manager-vertical"></div>
        <div class="vertical-line" id="technical-manager-vertical"></div>
        <div class="horizontal-line" id="level5-horizontal"></div>

        <div class="org-container">
            <!-- Level 1: PIMPRO -->
            <div class="level">
                <div class="department">
                    <div class="title">PIMPRO</div>
                    <div class="name">
                        <select>
                            <option selected>Orang A</option>
                            <option>Orang B</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Level 2: Project Controller, Account Manager, Project Engineering Manager -->
            <div class="level" style="margin-top: 40px;">
                <div class="department" style="margin-right: 50px;">
                    <div class="title">Project Controller</div>
                    <div class="name">
                        <select>
                            <option selected>Orang C</option>
                            <option>Orang D</option>
                        </select>
                    </div>
                </div>

                <div class="department" style="margin-left: 50px; margin-right: 50px;">
                    <div class="title">Account Manager</div>
                    <div class="name">
                        <select>
                            <option selected>Orang E</option>
                            <option>Orang F</option>
                        </select>
                    </div>
                </div>

                <div class="department" style="margin-left: 50px;">
                    <div class="title">Project Engineering Manager 1</div>
                    <div class="name">
                        <select>
                            <option selected>Orang G</option>
                            <option>Orang H</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Level 3: Multiple departments -->
            <div class="level" style="margin-top: 40px;">
                <div class="multi-department">
                    <div class="department">
                        <div class="title">Principle Management</div>
                        <div class="name">
                            <select>
                                <option selected>Orang I</option>
                                <option>Orang J</option>
                            </select>
                        </div>
                    </div>

                    <div class="department">
                        <div class="title">ILS Management</div>
                        <div class="name">
                            <select>
                                <option selected>Orang K</option>
                                <option>Orang L</option>
                            </select>
                        </div>
                    </div>

                    <div class="department">
                        <div class="title">Project Admin</div>
                        <div class="name">
                            <select>
                                <option selected>Orang M</option>
                                <option>Orang N</option>
                            </select>
                        </div>
                    </div>

                    <div class="department">
                        <div class="title">Quality Assurance</div>
                        <div class="name">
                            <select>
                                <option selected>Orang O</option>
                                <option>Orang P</option>
                            </select>
                        </div>
                    </div>

                    <div class="department">
                        <div class="title">HSE</div>
                        <div class="name">
                            <select>
                                <option selected>Orang Q</option>
                                <option>Orang R</option>
                            </select>
                        </div>
                    </div>

                    <div class="department">
                        <div class="title">Site Manager</div>
                        <div class="name">
                            <select>
                                <option selected>Orang S</option>
                                <option>Orang T</option>
                            </select>
                        </div>
                    </div>

                    <div class="department">
                        <div class="title">Project Engineer</div>
                        <div class="name">
                            <select>
                                <option selected>Orang U</option>
                                <option>Orang V</option>
                            </select>
                        </div>
                    </div>

                    <div class="department">
                        <div class="title">Technical Manager</div>
                        <div class="name">
                            <select>
                                <option selected>Orang W</option>
                                <option>Orang X</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Level 4: Installation Technician -->
            <div class="level" style="margin-top: 40px; justify-content: flex-end; margin-right: 180px;">
                <div class="department">
                    <div class="title">Installation Technician</div>
                    <div class="name">
                        <select>
                            <option selected>Orang Y</option>
                            <option>Orang Z</option>
                        </select>
                    </div>
                    <div class="name">
                        <select>
                            <option selected>Orang AA</option>
                            <option>Orang AB</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Level 5: Bottom departments -->
            <div class="level" style="margin-top: 40px;">
                <div class="multi-department">
                    <div class="department">
                        <div class="title">Mechanical Engineer</div>
                        <div class="name">
                            <select>
                                <option selected>Orang AC</option>
                                <option>Orang AD</option>
                            </select>
                        </div>
                        <div class="name">
                            <select>
                                <option selected>Orang AE</option>
                                <option>Orang AF</option>
                            </select>
                        </div>
                    </div>

                    <div class="department">
                        <div class="title">Production Technician</div>
                        <div class="name">
                            <select>
                                <option selected>Orang AG</option>
                                <option>Orang AH</option>
                            </select>
                        </div>
                        <div class="name">
                            <select>
                                <option selected>Orang AI</option>
                                <option>Orang AJ</option>
                            </select>
                        </div>
                    </div>

                    <div class="department">
                        <div class="title">Network Engineer</div>
                        <div class="name">
                            <select>
                                <option selected>Orang AK</option>
                                <option>Orang AL</option>
                            </select>
                        </div>
                    </div>

                    <div class="department">
                        <div class="title">System Engineer</div>
                        <div class="name">
                            <select>
                                <option selected>Orang AM</option>
                                <option>Orang AN</option>
                            </select>
                        </div>
                        <div class="name">
                            <select>
                                <option selected>Orang AO</option>
                                <option>Orang AP</option>
                            </select>
                        </div>
                    </div>

                    <div class="department">
                        <div class="title">Software Engineer</div>
                        <div class="name">
                            <select>
                                <option selected>Orang AQ</option>
                                <option>Orang AR</option>
                            </select>
                        </div>
                        <div class="name">
                            <select>
                                <option selected>Orang AS</option>
                                <option>Orang AT</option>
                            </select>
                        </div>
                        <div class="name">
                            <select>
                                <option selected>Orang AU</option>
                                <option>Orang AV</option>
                            </select>
                        </div>
                        <div class="name">
                            <select>
                                <option selected>Orang AW</option>
                                <option>Orang AX</option>
                            </select>
                        </div>
                        <div class="name">
                            <select>
                                <option selected>Orang AY</option>
                                <option>Orang AZ</option>
                            </select>
                        </div>
                        <div class="name">
                            <select>
                                <option selected>Orang BA</option>
                                <option>Orang BB</option>
                            </select>
                        </div>
                    </div>

                    <div class="department">
                        <div class="title">Drafter</div>
                        <div class="name">
                            <select>
                                <option selected>Orang BC</option>
                                <option>Orang BD</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional vertical connectors -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Create vertical lines from Site Manager and Technical Manager to level 4
            const siteMgrDiv = document.querySelector('.title:contains("Site Manager")').parentNode;
            const techMgrDiv = document.querySelector('.title:contains("Technical Manager")').parentNode;

            const siteMgrPos = siteMgrDiv.getBoundingClientRect();
            const techMgrPos = techMgrDiv.getBoundingClientRect();

            const site2InstLine = document.createElement('div');
            site2InstLine.className = 'vertical-line';
            site2InstLine.style.left = (siteMgrPos.left + siteMgrPos.width/2) + 'px';
            site2InstLine.style.top = (siteMgrPos.bottom) + 'px';
            site2InstLine.style.height = '40px';
            document.querySelector('.org-chart').appendChild(site2InstLine);

            const tech2DrafterLine = document.createElement('div');
            tech2DrafterLine.className = 'vertical-line';
            tech2DrafterLine.style.left = (techMgrPos.left + techMgrPos.width/2) + 'px';
            tech2DrafterLine.style.top = (techMgrPos.bottom) + 'px';
            tech2DrafterLine.style.height = '145px';
            document.querySelector('.org-chart').appendChild(tech2DrafterLine);
        });

        // Helper function to find elements by text content
        Document.prototype.querySelector.findByContains = function(selector, text) {
            var elements = document.querySelectorAll(selector);
            return Array.prototype.filter.call(elements, function(element) {
                return RegExp(text).test(element.textContent);
            });
        };
    </script>
</body>
</html>
