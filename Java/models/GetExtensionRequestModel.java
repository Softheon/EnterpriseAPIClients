/**
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

package softheon.enterprise.api.client.models;

import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * Model for the GET Extension input parameters.
 */
public class GetExtensionRequestModel {
    /**
     * Gets or sets the drawer identifier.
     */
    @JsonProperty(value = "DrawerID", required = true)
    private int drawerID;

    /**
     * Gets or sets the entity identifier.
     */
    @JsonProperty(value = "EntityID", required = true)
    private int entityID;

    /**
     * Gets or sets the profile identifier.
     */
    @JsonProperty(value = "ProfileID", required = true)
    private int profileID;

    /**
     * Gets or sets the extension identifier.
     */
    @JsonProperty(value = "ID")
    private Integer id;

    /**
     * Gets or sets the type of the extension.
     */
    @JsonProperty(value = "Type")
    private Integer type;

    /**
     * Gets or sets the page number.
     */
    @JsonProperty(value = "Page")
    private Integer page;

    /**
     * Gets or sets the size of the page.
     */
    @JsonProperty(value = "PageSize")
    private Integer pageSize;

    /**
     * Gets or sets the order. Possible values include: 'Unspecified',
     * 'Ascending', 'Descending'.
     */
    @JsonProperty(value = "SortOrder")
    private String sortOrder;

    /**
     * Gets or sets the column to order by. Possible values include:
     * 'RowNumber', 'ID', 'Type', 'String', 'Integer', 'Double', 'Date'.
     */
    @JsonProperty(value = "SortBy")
    private String sortBy;

    /**
     * Get the drawerID value.
     *
     * @return the drawerID value
     */
    public int drawerID() {
        return this.drawerID;
    }

    /**
     * Set the drawerID value.
     *
     * @param drawerID the drawerID value to set
     * @return the GetExtensionRequestModel object itself.
     */
    public GetExtensionRequestModel withDrawerID(int drawerID) {
        this.drawerID = drawerID;
        return this;
    }

    /**
     * Get the entityID value.
     *
     * @return the entityID value
     */
    public int entityID() {
        return this.entityID;
    }

    /**
     * Set the entityID value.
     *
     * @param entityID the entityID value to set
     * @return the GetExtensionRequestModel object itself.
     */
    public GetExtensionRequestModel withEntityID(int entityID) {
        this.entityID = entityID;
        return this;
    }

    /**
     * Get the profileID value.
     *
     * @return the profileID value
     */
    public int profileID() {
        return this.profileID;
    }

    /**
     * Set the profileID value.
     *
     * @param profileID the profileID value to set
     * @return the GetExtensionRequestModel object itself.
     */
    public GetExtensionRequestModel withProfileID(int profileID) {
        this.profileID = profileID;
        return this;
    }

    /**
     * Get the id value.
     *
     * @return the id value
     */
    public Integer id() {
        return this.id;
    }

    /**
     * Set the id value.
     *
     * @param id the id value to set
     * @return the GetExtensionRequestModel object itself.
     */
    public GetExtensionRequestModel withId(Integer id) {
        this.id = id;
        return this;
    }

    /**
     * Get the type value.
     *
     * @return the type value
     */
    public Integer type() {
        return this.type;
    }

    /**
     * Set the type value.
     *
     * @param type the type value to set
     * @return the GetExtensionRequestModel object itself.
     */
    public GetExtensionRequestModel withType(Integer type) {
        this.type = type;
        return this;
    }

    /**
     * Get the page value.
     *
     * @return the page value
     */
    public Integer page() {
        return this.page;
    }

    /**
     * Set the page value.
     *
     * @param page the page value to set
     * @return the GetExtensionRequestModel object itself.
     */
    public GetExtensionRequestModel withPage(Integer page) {
        this.page = page;
        return this;
    }

    /**
     * Get the pageSize value.
     *
     * @return the pageSize value
     */
    public Integer pageSize() {
        return this.pageSize;
    }

    /**
     * Set the pageSize value.
     *
     * @param pageSize the pageSize value to set
     * @return the GetExtensionRequestModel object itself.
     */
    public GetExtensionRequestModel withPageSize(Integer pageSize) {
        this.pageSize = pageSize;
        return this;
    }

    /**
     * Get the sortOrder value.
     *
     * @return the sortOrder value
     */
    public String sortOrder() {
        return this.sortOrder;
    }

    /**
     * Set the sortOrder value.
     *
     * @param sortOrder the sortOrder value to set
     * @return the GetExtensionRequestModel object itself.
     */
    public GetExtensionRequestModel withSortOrder(String sortOrder) {
        this.sortOrder = sortOrder;
        return this;
    }

    /**
     * Get the sortBy value.
     *
     * @return the sortBy value
     */
    public String sortBy() {
        return this.sortBy;
    }

    /**
     * Set the sortBy value.
     *
     * @param sortBy the sortBy value to set
     * @return the GetExtensionRequestModel object itself.
     */
    public GetExtensionRequestModel withSortBy(String sortBy) {
        this.sortBy = sortBy;
        return this;
    }

}