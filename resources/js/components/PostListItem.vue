<template>
    <div>
        <router-link :to="{name: 'post', params:{id:post.id}}">
            <h4 class="text-2xl pb-3 font-semibold hover:underline">{{ post.title }}</h4>
        </router-link>
        <p class="text-gray-600 pb-3">{{ post.lead }}</p>
        <div class="text-sm text-gray-600">
            By
            <b>
                <router-link :to="{name: 'author', params: {id:post.author.id}}" class="underline hover:text-black">
                    {{ post.author.name }}
                </router-link>
            </b>
            &nbsp;
            in
            <b>
                <router-link :to="{name: 'topic', params: {slug:post.topic.slug}}" class="underline hover:text-black">
                    {{ post.topic.name }}
                </router-link>
            </b>&nbsp;. {{ post.created_at | timeago }}
        </div>
    </div>
</template>

<script>
export default {
    name: "PostListItem",
    props: {
        post: Object
    }
}
</script>

<style scoped>

</style>
