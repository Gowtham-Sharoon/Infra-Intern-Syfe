**Infra-Intern-Syfe**/
├── **charts**/
│ ├── **wordpress**/
│ │ ├── **templates**/
| | | ├──deployment.yaml
| | | ├──service.yaml
│ │ ├── Chart.yaml
│ │ ├── values.yaml
│ ├── **monitoring**/
│ │ ├── **templates**/
| | | ├──deployment.yaml
| | | ├──service.yaml
│ │ ├── Chart.yaml
│ │ ├── values.yaml
│ ├── **nginx**/
│ │ ├── **templates**/
| | | ├──configmap.yaml
| | | ├──deployment.yaml
| | | ├──_helpers.tpl
| | | ├──service.yaml
│ │ ├── Chart.yaml
│ │ ├── values.yaml
├── **dockerfiles**/
│ ├── **wordpress**/
│ │ ├── Dockerfile
│ │ ├── wp-config.php
│ ├── **mysql**/
│ │ ├── Dockerfile
│ │ ├── init.sql
│ ├── **nginx**/
│ │ ├── Dockerfile
│ │ ├── nginx.conf
│ │ ├── **lua-scripts**/
│ │ ├── example.lua
├── **manifests**/
│ ├── pv.yaml
│ ├── pvc.yaml
├── **sql**/
│ ├── init.sql
├── **wordpress-files**/
│ ├── wp-content/
│ │ ├── plugins/
│ │ ├── themes/
│ │ ├── uploads/
├── README.md
