<template>
  <v-app id="keep">
    <v-app-bar
        app
        absolute
        clipped-left
        color="amber"
    >
      <span class="title ml-3 mr-5">Bootstrapped Plugin Dashboard</span>
      <v-spacer></v-spacer>
    </v-app-bar>

    <v-navigation-drawer
        absolute
        v-model="drawer"
        app
        clipped
        style="top:68px"
        color="grey lighten-4"
    >
      <v-list
          dense
          class="grey lighten-4"
      >
        <template v-for="(item, i) in items">
          <v-row
              v-if="item.heading"
              :key="i"
              align="center"
          >
            <v-col cols="6">
              <v-subheader v-if="item.heading">
                {{ item.heading }}
              </v-subheader>
            </v-col>
            <v-col
                cols="6"
                class="text-right"
            >
              <v-btn
                  small
                  text
              >edit</v-btn>
            </v-col>
          </v-row>
          <v-divider
              v-else-if="item.divider"
              :key="i"
              dark
              class="my-4"
          ></v-divider>
          <v-list-item
              v-else
              :key="i"
              link
          >
            <v-list-item-action>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title class="grey--text">
                {{ item.text }}
              </v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </template>
      </v-list>
    </v-navigation-drawer>

    <v-main style="top:66px">
      This is the container...
    </v-main>
  </v-app>
</template>

<script>
  export default {
    name: "Dashboard",
    props: {
      source: String,
    },
    data: () => ({
      drawer: null,
      items: [
        { icon: 'mdi-lightbulb-on', text: 'Notes' },
        { icon: 'mdi-cursor-pointer', text: 'Reminders' },
        { divider: true },
        { heading: 'Labels' },
        { icon: 'mdi-account-plus', text: 'Create new label' },
        { divider: true },
        { icon: 'mdi-package-down', text: 'Archive' },
        { icon: 'mdi-delete', text: 'Trash' },
        { divider: true },
        { icon: 'mdi-cog', text: 'Settings' },
        { icon: 'mdi-message', text: 'Trash' },
        { icon: 'mdi-help-circle', text: 'Help' },
        { icon: 'mdi-cellphone-link', text: 'App downloads' },
        { icon: 'mdi-keyboard', text: 'Keyboard shortcuts' },
      ],
    }),
  }
</script>

<style>
  #keep .v-navigation-drawer__border {
    display: none
  }
</style>
