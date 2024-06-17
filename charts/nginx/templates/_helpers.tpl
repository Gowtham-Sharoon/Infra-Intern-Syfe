{{/*
Expand the name of the chart.
*/}}
{{- define "nginx.fullname" -}}
{{- printf "%s-%s" .Release.Name .Chart.Name | trunc 63 | trimSuffix "-" -}}
{{- end -}}

{{/*
Create common labels.
*/}}
{{- define "nginx.labels" -}}
helm.sh/chart: {{ include "nginx.chart" . }}
{{ include "nginx.selectorLabels" . }}
{{- end -}}

{{/*
Expand the chart name.
*/}}
{{- define "nginx.chart" -}}
{{- printf "%s-%s" .Chart.Name .Chart.Version | trunc 63 | trimSuffix "-" -}}
{{- end -}}

{{/*
Expand the selector labels.
*/}}
{{- define "nginx.selectorLabels" -}}
app.kubernetes.io/name: {{ include "nginx.name" . }}
app.kubernetes.io/instance: {{ .Release.Name }}
{{- if .Values.podLabels }}
{{ toYaml .Values.podLabels | nindent 4 }}
{{- end }}
{{- end -}}

{{/*
Expand the simple name of the chart.
*/}}
{{- define "nginx.name" -}}
{{- .Chart.Name | trunc 63 | trimSuffix "-" -}}
{{- end -}}

