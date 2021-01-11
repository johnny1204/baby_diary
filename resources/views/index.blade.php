<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
  <div id="app" class="v-application">
    <v-row class="fill-height">
      <v-col>
        <v-toolbar flat>
          <v-btn fab text small color="grey darken-2" @click="prev">
            <v-icon small>mdi-chevron-left</v-icon>
          </v-btn>
          <v-btn fab text small color="grey darken-2" @click="next">
            <v-icon small>mdi-chevron-right</v-icon>
          </v-btn>
        </v-toolbar>
        <v-sheet height="800">
          <v-calendar
            ref="calendar"
            :now="today"
            :events="events"
            color="primary"
            type="week"
            v-model="focus"
            @change="getEvents"
            @click:event="openModal"
          >
          <template v-slot:event="{ event, timed, eventSummary }">
            <div class="v-event-draggable" v-html="eventSummary()"></div>
            <div v-if="timed" class="v-event-drag-bottom" @mousedown.stop="extendBottom(event)"></div>
          </template>
          </v-calendar>
        </v-sheet>
      </v-col>
    </v-row>
    <modal :show-modal="this.showModal" :time="this.time" v-on:close-modal="closeModal"></modal>
  </div>
  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>